<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductAvailability;
use Illuminate\Http\Request;

class ProductAvailabilityController extends Controller
{
    public function index()
    {
        $availabilities = ProductAvailability::all();

        return view('admin.modules.product_availabilities.index',compact('availabilities'));
    }

    public function create()
    {

        return view('admin.modules.product_availabilities.create');
    }

    public function store(Request $request)
    {
        ProductAvailability::create([
            'name'=>$request['name'],
            'days'=>$request['demo3']
        ]);

        return redirect(route('product-availabilities.index'))->with('success','Your product availability has been successfully created.');
    }

    public function edit(ProductAvailability $productAvailability)
    {

        return view('admin.modules.product_availabilities.edit',compact('productAvailability'));
    }

    public function update(Request $request, ProductAvailability $productAvailability)
    {

        $productAvailability->update([
            'name'=>$request['name'],
            'days'=>$request['demo3']
        ]);

        return redirect(route('product-availabilities.index'))->with('success','Your product availability has been successfully updated.');
    }

    public function destroy(ProductAvailability $productAvailability)
    {
        $productAvailability->delete();

        return redirect(route('product-availabilities.index'))->with('success','Your product availability has been successfully deleted.');
    }
}
