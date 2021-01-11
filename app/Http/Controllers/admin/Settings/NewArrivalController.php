<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\NewArrivalTab;
use App\Models\ProductCategory;

class NewArrivalController extends Controller
{
    public function index()
    {

    	$tabList = NewArrivalTab::with('category')->get();

    	return view('admin.modules.settings.website.arrivals.index', compact("tabList"));
    }

    public function create()
    {

    	$Categories = ProductCategory::where('parent_id',0)->with('childrens.user')->get();
    	return view('admin.modules.settings.website.arrivals.create', compact("Categories"));
    }

    public function edit($id)
    {

    	$Categories = ProductCategory::where('parent_id',0)->with('childrens.user')->get();
    	$arrival = NewArrivalTab::findOrFail($id);
    	return view('admin.modules.settings.website.arrivals.edit', compact("Categories", "arrival"));
    }

    public function store(Request $request)
    {

    	$tab = new NewArrivalTab();
    	$tab->cat_id= $request->cat_id;
    	$tab->no_of_product= $request->no_of_product;
    	$tab->is_published= $request->has('is_published');
    	$tab->save();

    	return redirect(route('arrivals.index'))->with('success','Arrivals tab has been created successfully.');
    }

    public function update(Request $request, $id)
    {

    	$tab = NewArrivalTab::findOrFail($id);
    	$tab->cat_id= $request->cat_id;
    	$tab->no_of_product= $request->no_of_product;
    	$tab->is_published= $request->has('is_published');
    	$tab->save();

    	return redirect(route('arrivals.index'))->with('success','Arrivals tab has been updated successfully .');
    }
}
