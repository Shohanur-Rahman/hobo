<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductSize;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductSizeController extends Controller
{
    public function index()
    {
        $userType = \Illuminate\Support\Facades\Auth::user()->user_type;

        if (strtolower($userType) == "vendor") {
            $productSizes = ProductSize::where('user_id', Auth::id())->get();

        }else{
            $productSizes = ProductSize::all();
        }


        return view('admin.modules.product_sizes.index',compact('productSizes'));
    }

    public function create()
    {
        return view('admin.modules.product_sizes.create');
    }

    public function store(Request $request)
    {
        ProductSize::create([
            'user_id'=>Auth::id(),
            'size'=>$request['size'],
        ]);

        return redirect(route('product-sizes.index'))->with('success','Your product size has been successfully added.');
    }

    public function edit(ProductSize $productSize)
    {
        $this->authorize('access-settings',$productSize);

        return view('admin.modules.product_sizes.edit',compact('productSize'));
    }

    public function update(Request $request, ProductSize $productSize)
    {
        $this->authorize('access-settings',$productSize);

        $productSize->update([
            'user_id'=>Auth::id(),
            'size'=>$request['size'],
        ]);

        return redirect(route('product-sizes.index'))->with('success','Your product size has been successfully updated.');
    }

    public function destroy(ProductSize $productSize)
    {
        $this->authorize('access-settings',$productSize);

        $productSize->delete();

        return redirect(route('product-sizes.index'))->with('success','Your product size has been successfully deleted.');
    }
}
