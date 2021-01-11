<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\admin\HelperController;
use App\Http\Controllers\Controller;
use App\Models\CaseCategory;
use App\Models\CaseType;
use App\Models\SiteSetting;
use App\User\CustomerSupport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomerSupportController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        $caseTypes = CaseType::all();

        return view('user.pages.customer_supports.create',compact('caseTypes'));
    }

    public function store(Request $request)
    {
        $helper = new HelperController();

        $customerEmail = $request['email'];
        $adminMail = SiteSetting::first()->email;
        $subject = $request['subject'];

        $data = [
            'email'=>$customerEmail,
            'first_name'=>$request['first_name'],
            'last_name'=>$request['last_name'],
            'order_id'=>$request['order_id'],
            'case_type_id'=>$request['case_type_id'],
            'case_category_id'=>$request['case_category_id'],
            'subject'=>$subject,
            'description'=>$request['description'],
            'file'=>$helper->uploadImage($request->File('image_url'), 'uploads/customer_supports/'),
        ];

        CustomerSupport::create($data);

        Mail::send('emails.customer-support',['email'=>$customerEmail],function($message) use ($customerEmail){
            $message->to($customerEmail)->subject('Confirmation mail');
        });


       Mail::send('emails.admin.customer-support',['data'=>$data], function($message) use ($adminMail,$subject){
            $message->to($adminMail)->subject($subject);
        });


        return redirect()->back()->with('success','mail send has been successfully');
    }

    public function caseCategory(Request $request)
    {
        $caseCategories = CaseCategory::where('case_type_id',$request['id'])->get();

        $categories = '<option value="">Select Case Category</option>';
        foreach ($caseCategories as $caseCategory){
            $categories .= '<option value="'.$caseCategory->id.'">'.$caseCategory->case_category.'</option>';
        }

        return $categories;
    }
}
