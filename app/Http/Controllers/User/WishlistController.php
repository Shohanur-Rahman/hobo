<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class WishlistController extends Controller
{

    public function index()
    {
        if (Auth::user()) {
            $wishLists = Wishlist::where('user_id', Auth::id())->with('product')->get();
        } elseif (Session::has('session_id')) {
            $wishLists = Wishlist::where('session_id', Session::get('session_id'))->with('product')->get();
        } else {
            $wishLists = collect();
        }


        return view('user.pages.wishlist.index', compact('wishLists'));
    }

    public function store(Request $request)
    {
        $product_id = $request['product_id'];
        $sessionCheck = Session::has('session_id');


        $wishList = '';

        if(Auth::check()){
            $wishList = Wishlist::where(['product_id' => $product_id, 'user_id' => auth()->id()])->first();
        } elseif ($sessionCheck){
            $wishList = Wishlist::where(['product_id' => $product_id, 'session_id' => Session::get('session_id')])->first();
        }

        if (!empty($wishList) && ($sessionCheck || Auth::user())) {
            $wishList->update([
                'quantity' => $wishList->quantity + 1,
            ]);

        }

        if(empty($wishList)){

            if (Auth::check()) {
                Wishlist::create([
                    'product_id' => $product_id,
                    'user_id' => Auth::id(),
                ]);
            }
            else {
                $session_id = (Session::has('session_id') ? Session::get('session_id') : Str::random(40));
                Session::put('session_id', $session_id);

                Wishlist::create([
                    'product_id' => $product_id,
                    'session_id' => $session_id,
                ]);
            }
        }

        if (Auth::check()) {
            $wishListCount = Wishlist::where('user_id', auth()->id())->count();
        } else {
            $wishListCount = Wishlist::where('session_id', Session::get('session_id'))->count();
        }

        return $wishListCount;

    }

    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        return redirect()->back()->with('success-message', 'WishList has been removed successfully');
    }

    public function update(Request $request)
    {
        if (Auth::user()) {
            $wishLists = Wishlist::where('user_id', Auth::id())->with('product')->get();
        }

        if (Session::has('session_id')) {
            $wishLists = Wishlist::where('session_id', Session::get('session_id'))->with('product')->get();
        }


        foreach ($wishLists as $key => $value) {

            $value->update([
                'user_id' => auth()->id(),
                'product_id' => $request['product_id'][$key],
                'quantity' => $request['quantity'][$key]
            ]);
        }

        return redirect()->back()->with('success-message', 'WishList has been updated successfully');
    }

}
