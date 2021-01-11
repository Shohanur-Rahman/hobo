<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\ProductFeature;
use Illuminate\Http\Request;

class ProductFeatureController extends Controller
{
    public function index()
    {
        $productFeatures = ProductFeature::with('category')->get();

        return view('admin.modules.settings.website.product_features.index', compact("productFeatures"));
    }

    public function create()
    {

        return view('admin.modules.settings.website.product_features.create');
    }

    public function store(Request $request)
    {
        ProductFeature::create([
            'no_of_product'=>$request['no_of_product'],
            'category_id'=>$request['category_id'],
            'is_published'=>$request->has('is_published'),
        ]);

        return redirect(route('product-features.index'))->with('success','Product Feature has been created successfully');
    }

    public function edit(ProductFeature $productFeature)
    {

        return view('admin.modules.settings.website.product_features.edit', compact("productFeature"));
    }

    public function update(Request $request, ProductFeature $productFeature)
    {

        $productFeature->update([
            'no_of_product'=>$request['no_of_product'],
            'category_id'=>$request['category_id'],
            'is_published'=>$request->has('is_published'),
        ]);

        return redirect(route('product-features.index'))->with('success','Product Feature has been updated successfully');
    }

    public function destroy(ProductFeature $productFeature)
    {
        $productFeature->delete();

        return redirect(route('product-features.index'))->with('success','Product Feature has been deleted successfully');
    }
}
