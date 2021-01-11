<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SocialProvider;
use App\Models\User\UserProfile;
use App\Models\User\Wishlist;
use App\User;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class UserController  extends Controller
{

    public function login()
    {
        return view('user.pages.accounts.login');
    }

    public function register()
    {
        return view('user.pages.accounts.register');
    }

    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'phone' => ['required', 'string', 'max:255'],
                'password' => ['required', 'string', 'min:8', 'required_with:password_confirmation', 'same:password_confirmation'],
            ]
        );

        Session::put('register-session', $data['email']);


        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $userProfile = new UserProfile();
        $userProfile->phone = $data['phone'];
        $userProfile->user_id = $user->id;
        $userProfile->save();

        //$user->userProfile()->save($userProfile);


        /*$user->userProfile([
            'avatar' => $data['phone']
        ])->create();*/

        //dd($user);


        $email = $data['email'];
        $password = $data['password'];


        $attempts = ['email' => $email, 'password' => $password, 'is_active' => 1];

        if (Auth::attempt($attempts)) {

            $this->wishLists();

            return redirect(route('profiles.index'));
        }


        return redirect()->back()->with('success-message', 'registration successfully complete. Please Check Your Email!!');
    }

    public function show(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|string|max:250',
            'password' => 'required|min:8'
        ]);

        $remember_me = $request['remember'] ? true : false;
        $attempts = ['email' => $request['email'], 'password' => $request['password'], 'is_active' => 1];

        if (Auth::attempt($attempts, $remember_me) == false) {

            $attemptActivate = ['email' => $request['email'], 'password' => $request['password']];
            if (Auth::attempt($attemptActivate, $remember_me) == true) {

                return redirect()->back()->with('error-message', 'Your account has been disabled. Please contact your administrator.');
            }
        } else {

            $this->wishLists();
            return redirect(route('profiles.index'));

        }

        return redirect()->back()->with('error-message', 'Email or Password is Wrong');
    }

    public function forgetPasswordIndex()
    {
        return view('user.pages.accounts.forget-password');
    }

    public function forgetPasswordStore(Request $request)
    {
        $email = $request['email'];
        $code = ['code' => Str::random(5), 'email' => $email];

        Session::put('password-recovery-code', $code);

        Mail::send('emails.forget-password', $code, function ($message) use ($email) {
            $message->to($email)->subject('Recover Password via the code');
        });

        return redirect(route('password.recovery.index'));
    }

    public function passwordRecovery(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|min:5|max:5'
        ]);

        $code = Session::get('password-recovery-code');
        if ($code == null)
            return redirect(route('login'));

        if ($code['code'] === $request['code']) {
            return redirect(route('password.update'));
        }

        return redirect()->back()->with('error-message', 'Recovery Code is Wrong');

    }

    public function passwordRecoveryIndex()
    {

        return view('user.pages.accounts.recover-password-code');
    }

    public function passwordUpdateGet()
    {
        return view('user.pages.accounts.password-update');
    }

    public function passwordUpdateStore(Request $request)
    {
        $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'required_with:confirm-password', 'same:confirm-password'],
        ]);

        $code = Session::get('password-recovery-code');

        if (Session::has('password-recovery-code')) {
            $user = User::where('email', $code['email'])->first();

            $user->update(['password' => Hash::make($request['password']),]);

            return view('user.welcome');
        }

        return redirect(route('login'));
    }


    private function wishLists()
    {
        $presentWishList = Wishlist::select('product_id')->where('user_id', Auth::id())->get()->toArray();
        $wishListProductID = Arr::flatten($presentWishList);

        if (Session::has('session_id')) {
            $session_id = Session::get('session_id');

            $wishList = Wishlist::where(['session_id' => $session_id, 'user_id' => null])
                ->whereIn('product_id', $wishListProductID)
                ->get();


            $wishList->each(function ($wishList) {
                $oldWishList = Wishlist::where('product_id', $wishList->product_id)->first();
                $oldWishList->update([
                    'quantity' => $oldWishList->quantity + $wishList->quantity,
                    'user_id' => Auth::id()
                ]);
                $wishList->delete();
            });

            $newWishList = Wishlist::where(['session_id' => $session_id, 'user_id' => null])
                ->whereNotIn('product_id', $wishListProductID)
                ->get();

            $newWishList->each(function ($wishList) {
                $wishList->update(['user_id' => Auth::id(), 'session_id' => null]);
            });
        }
    }


    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
        } catch (\Exception $ex) {
            return redirect()->route('app.home');
        }

        /*
         *
         * Check social user already exist in our database
         */


        $dbUser = SocialProvider::where('provider_id', $socialUser->getId())->first();

        if (!$dbUser) {
            $existingUser = User::where('email',$socialUser->getEmail())->first();
            if(!$existingUser){
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                ]);

                $user->socialProviders()->create([
                    'provider_id' => $socialUser->getId(),
                    'provider' => $provider,
                ]);

                $user->userProfile()->create();
            }else{
                $existingUser->socialProviders()->create([
                    'provider_id' => $socialUser->getId(),
                    'provider' => $provider,
                ]);

                $user=$existingUser;
            }




        }else
            $user =$dbUser->user;


        Auth::login($user, true);

        return redirect()->route('profiles.index');


    }
}
