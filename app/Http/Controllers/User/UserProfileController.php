<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\admin\HelperController;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User\Country;
use App\Models\User\Order;
use App\Models\User\ShippingAddress;
use App\Models\User\UserProfile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\False_;

class UserProfileController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = User::where('id',$userId)->first();

        $shippingAddresses = ShippingAddress::where('user_id',$userId)->get();

        $company = Company::where('user_id',$userId)->first();

        $arrayProfiles = DB::table('user_profiles')
            ->select('avatar', 'dob', 'nid','nid_image','describe_address')
            ->where('user_id',$userId)
            ->first();

        $fillUp = true;
        foreach ($arrayProfiles as $profile){
            if($profile == null){
                $fillUp = false;
            };

        }

        $orders = Order::where('customer_id',Auth::id())->with('shippingAddress')->get();

        return view('user.pages.profiles.index',compact('shippingAddresses','user','orders','fillUp','company'));
    }

    public function edit()
    {
        $authId = Auth::id() ;
        $userProfile = UserProfile:: Where('user_id',$authId)->first();

        return view('user.pages.profiles.edit',compact('userProfile'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $user->userProfile()->update($this->requestField($request));



        $user->update(['name'=>$request['name']]);

        return redirect(route('profiles.index'))->with('success','Profile Updated Successfully');
    }

    public function changePasswordEdit ()
    {
        return view('user.pages.profiles.change-password');
    }

    public function changePasswordUpdate(Request $request, User $user)
    {
        $user = Auth::user();

        if(Hash::check($request['current_password'],$user->password)){
            $user->update([
               'password'=>Hash::make($request['new_password'])
            ]);

            return redirect(route('profiles.index'))->with('success','Password Updated Successfully');
        }

        return redirect()->back()->with('error-message','The current password is given wrong');
    }


    public function avatarUpdate(Request $request)
    {
        $userProfile =  Auth::user()->UserProfile;

        if($request->file('image_url')){
            @unlink($userProfile->image_url);
        }

        $helper = new HelperController();

        $userProfile->update([
           'avatar'=>$helper->uploadImage($request->File('avatar'), 'user/profiles/avatar/')
        ]);

        return redirect(route('profiles.index'))->with('success','Profile Avatar Updated Successfully');
    }

    public function requestField($request)
    {
        $helper = new HelperController();
        $imageUpload = $helper->uploadImage($request->file('nid_image'), 'user/profiles/nid/');
        $oldImage = auth()->user()->userProfile->nid_image;

        if($imageUpload ){
            if($oldImage){
                @unlink($oldImage);
            }
        }else{
            $imageUpload = $oldImage;
        }

        return [
            'secondary_email'=>$request['secondary_email'],
            'dob'=>$request['dob'],
            'nid'=>$request['nid'],
            'nid_image'=>$imageUpload,
            'phone'=>$request['phone'],
            'house'=>$request['house'],
            'road'=>$request['road'],
            'postcode'=>$request['postcode'],
            'state'=>$request['state'],
            'city'=>$request['city'],
            'country'=>$request['country'],
            'describe_address'=>$request['describe_address'],
            'line1'=>$request['line1'],
            'line2'=>$request['line2'],
        ];
    }
}
