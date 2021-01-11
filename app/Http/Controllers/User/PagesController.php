<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function about()
    {

        return view('user.pages.links.about');

    }


    public function contact()
    {

        return view('user.pages.links.contact');

    }

    public function sendMailStore(Request $request)
    {
        $data = [
          'name'=>$request['name'],
          'email'=>$request['email'],
          'subject'=>$request['subject'],
          'description'=>$request['description'],
        ];

        $mail = \App\Models\Mail::create([
            'subject'=>$request['subject'],
            'description'=>$request['description']
        ]);

        $mail->mailAddresses()->create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'status'=>0,
        ]);

        $adminEmail = SiteSetting::first()->email;

        Mail::send('emails.contact-send-mail',['data'=>$data],function ($message) use($data,$adminEmail){
            $message->to($adminEmail)->subject($data['subject']);
        });

        return redirect()->back()->with('success-message','email sent has been successfully');
    }


    public function faq()
    {

        return view('user.pages.links.faq');

    }

    public function privacyPolicy()
    {

        return view('user.pages.links.privacy');

    }
    public function termsConditions()
    {

        return view('user.pages.links.terms');

    }
    public function mediaInquiries()
    {

        return view('user.pages.links.media_inquiries');

    }
}
