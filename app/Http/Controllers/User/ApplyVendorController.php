<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\admin\HelperController;
use App\Http\Controllers\Controller;
use App\Models\User\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ApplyVendorController extends Controller
{
    public function verifyEmail()
    {
        $user = Auth::user();
        $email =$user->email;
        $code = rand(100000,999999);

        Session::put('verify_code',$code);

        Mail::send('emails.vendors.verify-email',['user'=>$user],function($message) use($email){
            $message->to($email)->subject('Verify Your Email Code');
        });

        return redirect(route('verify-code.create'));
    }

    public function verifyCodeCreate()
    {

        $code  = Session::get('verify_code');

        if(Session::has('verify_code')){
            return view('user.pages.apply-vendors.verify_code', compact('code'));
        }

        return redirect(route('profiles.index'));
    }

    public function verifyCodeStore(Request $request)
    {
        $user = Auth::user();
        $code = Session::get('verify_code');
        $secretKey = Str::random(10) .$user->id;

        if($code == $request['code']){
            $user->applyVendor()->create([
                'secret_key'=>$secretKey,
            ]);

            Mail::send('emails.vendors.admin-mail',['user'=>$user],function($message) {
                $message->to('admin@gmail.com')->subject('Application For Vendor');
            });

            return redirect(route('profiles.index'))->with('success','Apply For Seller Application Has Been Submitted Successfully');
        }

        return redirect()->back()->with('error-message','Email Verification Code Is Wrong');
    }
}
