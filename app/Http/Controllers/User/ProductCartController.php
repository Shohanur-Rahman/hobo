<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Wishlist;
use Illuminate\Http\Request;
use App\Models\User\CartItem;
use Illuminate\Support\Facades\Auth;

class ProductCartController extends Controller
{

    public function index()
    {
    	$myCartList = CartItem::with('product')->where('user_id', Auth::id())->get();

    	return view('user.pages.carts.index', compact('myCartList'));
    }
    public function delete(CartItem $cart)
    {
    	$cart->delete();
    	return redirect()->back();
    }


    public function clear()
    {
        $myCartList = CartItem::with('product')->where('user_id', Auth::id())->delete();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $carts = CartItem::where('user_id',auth()->id())->get();

        foreach ($carts as $key=>$cart){

            $cart->update([
                'user_id'=>auth()->id(),
                'product_id'=>$request['product_id'][$key],
                'quantity'=>$request['quantity'][$key]
            ]);
        }
        return redirect()->back()->with('success','Cart Item has been updated successfully');
    }

    public function wishListCartStore()
    {

        $wishLists = Wishlist::where('user_id', Auth::id())->with('product')->get();

        $wishLists->each(function ($wishList){
            CartItem::create([
                'user_id'=>$wishList->user_id,
                'product_id'=>$wishList->product_id,
                'quantity'=>$wishList->quantity,
            ]);

            $wishList->delete();
        });

        return redirect()->back()->with('success-message','Product has been added shopping cart');
    }
}
