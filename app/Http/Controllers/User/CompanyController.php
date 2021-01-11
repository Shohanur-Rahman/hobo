<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\admin\HelperController;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function create()
    {
        return view('user.pages.companies.create');
    }

    public function store(Request $request){
        $helper = new HelperController();

        $companyName = $request['company_name'];

        Company::create([
            'user_id'=>Auth::id(),
            'company_name'=>$companyName,
            'company_number'=>$request['company_number'],
            'company_img'=>$helper->uploadImage($request->File('company_img'), 'uploads/company/'.$companyName.'/'),
            'line1'=>$request['line1'],
            'line2'=>$request['line2'],
            'state'=>$request['state'],
            'postcode'=>$request['postcode'],
            'city'=>$request['city'],
            'describe_address'=>$request['describe_address'],
        ]);

        return redirect(route('verify-email.store'));
    }
}
