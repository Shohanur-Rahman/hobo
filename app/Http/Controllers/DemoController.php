<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    /*public function index()
    {
        $productFeatures = ProductFeature::all();
        return view('admin.modules.settings.website.product_features.index', compact("productFeatures"));
    }

    public function create()
    {

        return view('admin.modules.settings.website.product_features.create');
    }

    public function store(Request $request)
    {
        return redirect(route('product_features.index'))->with('success','New Product Feature Created Successfully');
    }

    public function edit(ProductFeature $productFeature)
    {

        return view('admin.modules.settings.website.product_features.edit', compact("productFeatures"));
    }

    public function update(Request $request, ProductFeature $productFeature)
    {

        return redirect(route('product_features.index'))->with('success','Product Feature Updated Successfully');
    }

    public function destroy()
    {
        return redirect(route('product_features.index'))->with('success','Product Feature Deleted Successfully');
    }*/
}
