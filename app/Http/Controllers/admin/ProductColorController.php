<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductColor;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductColorController extends Controller
{
    public function index()
    {
        $userType = \Illuminate\Support\Facades\Auth::user()->user_type;

        if (strtolower($userType) == "vendor") {
            $productColors = ProductColor::where('user_id', Auth::id())->get();

        }else{
            $productColors = ProductColor::all();
        }

        return view('admin.modules.product_colors.index',compact('productColors'));
    }

    public function create()
    {
        return view('admin.modules.product_colors.create');
    }

    public function store(Request $request)
    {
        ProductColor::create([
            'user_id'=>Auth::id(),
            'color'=>$request['color'],
        ]);

        return redirect(route('product-colors.index'))->with('success','Your product color has been successfully added.');
    }

    public function edit(ProductColor $productColor)
    {
        $this->authorize('access-settings',$productColor);

        return view('admin.modules.product_colors.edit',compact('productColor'));
    }

    public function update(Request $request, ProductColor $productColor)
    {
        $this->authorize('access-settings',$productColor);

        $productColor->update([
            'user_id'=>Auth::id(),
            'color'=>$request['color'],
        ]);

        return redirect(route('product-colors.index'))->with('success','Your product color has been successfully updated.');
    }

    public function destroy(ProductColor $productColor)
    {
        $this->authorize('access-settings',$productColor);

        $productColor->delete();

        return redirect(route('product-colors.index'))->with('success','Your product color has been successfully deleted.');
    }
}
