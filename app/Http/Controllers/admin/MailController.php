<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use App\Models\MailAddress;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use function Sodium\crypto_box_publickey_from_secretkey;

class MailController extends Controller
{
    public function index()
    {
        $query = MailAddress::where('name' ,'!=' ,null)->with('mail');

        $mailAddresses = $query->orderBy('created_at', 'desc')->paginate(15);

        $query->get()->each(function ($mail){
            if($mail->read_at == 0){
                $mail->update(['read_at'=>1]);
            }
        });

        return view('admin.modules.mails.index',compact('mailAddresses'));
    }

    public function create()
    {
        $userTypes = User::select('user_type')->whereNotIn('user_type', ['admin', 'super-admin'])->distinct()->get();
        return view('admin.modules.mails.create', compact('userTypes'));
    }

    public function store(Request $request)
    {
        $emailAddresses = [];

        if ($request->has('emails') !== null) {
            $emailAddresses = explode(';', $request['emails']);

        }

        $subject = $request['subject'];
        $userType = $request['user_type'];

        $mail = Mail::create([
            'subject' => $subject,
            'description' => $request['description'],
            'user_type' => $userType
        ]);

        if ($request->has('user_type')) {
            $userEmails = User::where('user_type', $userType)->select('email')->get()->toArray();
            $userEmails = Arr::flatten($userEmails);

        }

        if($emailAddresses[0] != null){

            foreach ($emailAddresses as $key => $value) {

                $email = $emailAddresses[$key];
                if ($request->has('submit')) {
                    $mail->mailAddresses()->create(['email' => $email, 'status' => 1]);
                    \Illuminate\Support\Facades\Mail::send('admin.modules.mails.emails.email', ['email' => $email, 'data' => $mail], function ($message) use ($email, $subject) {
                        $message->to($email)->subject($subject);
                    });
                } else {
                    $mail->mailAddresses()->create(['email' => $email]);

                }

            }
        }


        if(!empty($userEmails)){
            foreach ($userEmails as $key => $value) {

                $email = $userEmails[$key];

                if ($request->has('submit')) {
                    $mail->mailAddresses()->create(['email' => $email, 'status' => 1]);
                    \Illuminate\Support\Facades\Mail::send('admin.modules.mails.emails.email', ['email' => $email, 'data' => $mail], function ($message) use ($email, $subject) {
                        $message->to($email)->subject($subject);
                    });
                } else {
                    $mail->mailAddresses()->create(['email' => $email,'user_type'=>$userType]);

                }

            }
        }


        return redirect()->back()->with('success', 'Email sent has been successfully');
    }

    public function show(MailAddress $mailAddress)
    {
        return view('admin.modules.mails.show', compact('mailAddress'));
    }

    public function destroy(Request $request)
    {

        $mailAddresses = MailAddress::whereIn('id', $request['mail'])->get();

        $mailAddresses->each(function ($mailAddress, $key) use ($mailAddresses) {
            $mailAddress->update(['read_at'=>0]);
            $mailAddress->delete();

            $mailTotalCount = MailAddress::where('mail_id', $mailAddress->mail->id)->count();

            if ($mailTotalCount == 0) {
                $mailAddress->mail()->delete();
            }
        });

        return redirect()->back()->with('success', 'Email deleted has been successfully');
    }

    public function sendMail()
    {
        $mailAddresses = MailAddress::with('mail')->where('status', 1)
            ->where('name','=', null)
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('admin.modules.mails.send-mail', compact('mailAddresses'));
    }




    public function draftMail()
    {

        $query = Mail::whereHas('mailAddresses', function ($q) {
            $q->where('status', 0);
            $q->where('name','=', null);
        });

        $mails = $query->orderBy('created_at', 'desc')->paginate(2);

        $query->get()->each(function ($mail){
            if($mail->read_at == 0){
                $mail->update(['read_at'=>1]);
            }
        });

        return view('admin.modules.mails.draft-mail', compact('mails'));
    }

    public function draftEdit(Mail $mail)
    {
        $userTypes = User::select('user_type')->whereNotIn('user_type', ['admin', 'super-admin'])->distinct()->get();

        $mailAddress = "";

        $mailAddresses = $mail->mailAddresses->whereNotIn('user_type',$mail->user_type);

        foreach ($mailAddresses as $address) {
            if ($mailAddress == "")
                $mailAddress = $address->email;
            else
                $mailAddress = $mailAddress . ', '.$address->email;
            }

        return view('admin.modules.mails.draft-mail-edit', compact('mail', 'userTypes', 'mailAddress'));
    }

    public function draftUpdate(Request $request, Mail $mail)
    {
        foreach ($mail->mailAddresses as $mailAddress) {

            $email = $mailAddress->email;

            $mail->mailAddresses()->update(['email' => $email, 'status' => 1]);
            \Illuminate\Support\Facades\Mail::send('admin.modules.mails.emails.email', ['email' => $email, 'data' => $mail], function ($message) use ($email, $mail) {
                $message->to($email)->subject($mail->subject);
            });
        }

        return redirect(route('send-mail.index'))->back()->with('success', 'Email sent has been successfully');
    }


    public function draftDestroy(Request $request)
    {
        $mails = Mail::whereIn('id', $request['mail'])->with('mailAddresses')->get();

        $mails->each(function ($mail) use ($mails) {
            $mail->forceDelete();

            $mail->mailAddresses()->forceDelete();
        });

        return redirect()->back()->with('success', 'Draft Email has been deleted successfully');
    }



    public function trashIndex()
    {
        $query = MailAddress::onlyTrashed()->with('mail');
        $trashMails = $query->orderBy('created_at', 'desc')->paginate(15);

        $query->get()->each(function ($trashMail){
            if($trashMail->read_at == 0){
                $trashMail->update(['read_at'=>1]);
            }
        });

        return view('admin.modules.mails.trash-mail', compact('trashMails'));
    }

    public function trashDestroy(Request $request)
    {

        $mailAddresses = MailAddress::whereIn('id', $request['mail'])->with('mail')->onlyTrashed();


        if($request['method_type'] == 'destroy'){
            $mailAddresses->get()->each(function ($mailAddress, $key) {

                $mailAddress->forceDelete();
                $mailCount = MailAddress::where('mail_id', $mailAddress->mail_id)->count();

                if ($mailCount == 0) {
                    $mailAddress->mail()->forceDelete();
                }
            });
        }else{
            $mailAddresses->get()->each(function ($mailAddress){

                if($mailAddress->read_at == 1){
                    $mailAddress->update(['read_at'=>0,'deleted_at'=>null]);
                    $mailAddress->mail()->update(['deleted_at'=>null]);
                }

            });

            $mailAddresses = $mailAddresses->restore();

        }


        return redirect()->back()->with('success', 'Emails permanently deleted successfully');
    }
}
