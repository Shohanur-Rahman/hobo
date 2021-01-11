<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Country;
use App\Models\User\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShippingAddressController extends Controller
{
    public function index()
    {
        $authUser = Auth::user();
        $shippingAddresses = ShippingAddress::where('user_id',Auth::id())->get();
        return view('user.pages.shippings.index', compact('authUser', 'shippingAddresses'));
    }

    public function create()
    {
        $authUser = Auth::user();
        return view('user.pages.shippings.create', compact('authUser'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'line1' => ['required'],
            'postcode' => ['required'],
        ]);

        $shipping = new ShippingAddress();
        $shipping->title = $request->line1. ' (' . $request->postcode . ')';
        $shipping->name = Auth::user()->name;
        $shipping->email = Auth::user()->email;
        $shipping->phone = $request->phone;
        $shipping->line1 = $request->line1;
        $shipping->line2 = $request->line2;
        $shipping->postcode = $request->postcode;
        $shipping->state = $request->state;
        $shipping->city = $request->city;
        $shipping->country = '';
        $shipping->describe_address = $request->describe_address;
        $shipping->user_id = Auth::id();
        $shipping->save();




        //$user = Auth::user();
        //$user->shippingAddresses()->create($this->requestField($request));

        if($request->ship_form == "profile")
            return redirect(route('shipping-address.index'))->with('success','New Shipping Address is Created Successfully');
        else
            return redirect(route('profiles.index'))->with('success','New Shipping Address is Created Successfully');


    }

    public function edit(ShippingAddress $shippingAddress)
    {

        return view('user.pages.shippings.edit',compact('shippingAddress'));
    }

    public function update(Request $request, ShippingAddress $shippingAddress)
    {
        /*$this->validate($request,[
            'email' => 'required|string|email|max:255|unique:shipping_addresses,email,'.$shippingAddress->id
        ]);*/

        //dd($request);

        $shippingAddress->update($this->requestField($request));

        return redirect(route('profiles.index'))->with('success','Shipping Address is Updated Successfully');
    }

    public function requestField($request)
    {
        return [
            //'title'=>$request['title'],
            //'name'=>$request['name'],
            //'email'=>$request['email'],
            'phone'=>$request['phone'],
            //'house'=>$request['house'],
            //'road'=>$request['road'],
            'line1'=>$request['line1'],
            'line2'=>$request['line2'],
            'city'=>$request['city'],
            'state'=>$request['state'],
            'postcode'=>$request['postcode'],
            //'country'=>$request['country'],
            'describe_address'=>$request['describe_address'],
        ];
    }
}
