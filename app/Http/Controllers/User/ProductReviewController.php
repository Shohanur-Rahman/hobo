<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\User\ProductReview;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function index()
    {
        $productReviews = ProductReview::all();

        return view('user.partials.widget.product_reviews', compact('productReviews'));
    }

    public function productReviews(Request $request, $id)
    {
        $this->validate($request,[
            'rating'=>'required',
            'comment'=>'required',
        ]);

        ProductReview::create([
            'product_id' => $id,
            'name' => auth()->user()->name,
            'rating' => $request['rating'],
            'comment' => $request['comment']
        ]);

        return redirect()->back()->with('success','Your review has been submitted successfully');
    }
}
