<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CaseType;
use App\Models\User\Order;
use App\User\CustomerSupport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerSupportController extends Controller
{
    public function index()
    {
        $customerSupports = CustomerSupport::with('caseType','caseCategory')->get();

        return view('admin.modules.customer_supports.index',compact('customerSupports'));
    }

    public function show(CustomerSupport $customerSupport)
    {
        return view('admin.modules.customer_supports.show',compact('customerSupport'));
    }

    public function profileShow(CustomerSupport $customerSupport)
    {
        $email = $customerSupport->email;

        $user = \App\User::where('email',$email)->first();

        if($user != null){
            $orders = Order::where('customer_id',$user->id)->with('shippingAddress')->get();
        }else{
            $orders = collect();
        }



        return view('admin.modules.customer_supports.profile',compact('user','orders'));
    }

    public function destroy(CustomerSupport $customerSupport)
    {
        $customerSupport->delete();

        return redirect()->back()->with('success','customer supports has been deleted successfully');

    }
}
