<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User\UserProfile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function create()
    {
        $userProfile = UserProfile::where('user_id',auth()->id())->first();

        return view('admin.modules.profiles.create',compact('userProfile'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $this->validate($request,[
            'secondary_email' => 'required|string|email|max:255|unique:user_profiles,secondary_email,'.$user->userProfile->id,
            'nid' => 'required|string|max:255|unique:user_profiles,nid,'.$user->userProfile->id,

        ]);

        $user->userProfile()->update($this->requestField($request));

        $user->update(['name'=>$request['name']]);

        return redirect(route('dashboard'))->with('success','Profile Updated Successfully');
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

        return redirect(route('dashboard'))->with('success','Profile Avatar Updated Successfully');
    }

    public function passwordEdit()
    {
        return view('admin.modules.profiles.password_edit');
    }

    public function passwordUpdate(Request $request)
    {
        $user = Auth::user();

        if(Hash::check($request['current_password'],$user->password)){
            $user->update([
                'password'=>Hash::make($request['new_password'])
            ]);

            return redirect(route('dashboard'))->with('success','Password Updated Successfully');
        }

        return redirect()->back()->with('error-message','The current password is given wrong');
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
            'line1'=>$request['line1'],
            'line2'=>$request['line2'],
            'house'=>$request['house'],
            'road'=>$request['road'],
            'postcode'=>$request['postcode'],
            'state'=>$request['state'],
            'city'=>$request['city'],
            'country'=>$request['country'],
            'describe_address'=>$request['describe_address'],
        ];
    }
}
