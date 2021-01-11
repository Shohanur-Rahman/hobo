<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('customer_id',Auth::id())->with('shippingAddress')->get();

        return view('user.pages.orders.index',compact('orders'));
    }

    public function show($id)
    {

        $order = Order::where('id',$id)->with('orderProducts.product')->first();


        if(!is_null($order)){

            return view('user.pages.orders.show',compact('order'));
        }

        return redirect(route('profiles.index'));
    }
}
