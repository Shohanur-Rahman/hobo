<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductBrands;
use App\Models\ProductCategory;
use App\Models\ProductBrandCategoryMap;
use DB;
use Carbon\Carbon;
use File;
use Mail;
use Illuminate\Support\Str;
use Auth;

class ProductBrandsController extends Controller
{
    public function index()
    {
        $brands = null;
        $userType = \Illuminate\Support\Facades\Auth::user()->user_type;

        if (strtolower($userType) == "vendor") {
            $brands = ProductBrands::where('user_id', Auth::id())->get();

        }else{
            $brands = ProductBrands::all();
        }


    	return view('admin.modules.brands.index', compact("brands"));
    }

    public function create()
    {
        $categories = ProductCategory::where('parent_id',0)->with('user','childrens.childrens.user')->get();
    	return view('admin.modules.brands.create', compact("categories"));
    }

    public function store(Request $req)
    {
        $helper = new HelperController();

    	$brand = new ProductBrands();
    	$brand->name = $req->name;
        $brand->user_id = Auth::id();

        $fileURL = $helper->uploadImage($req->file('imgInp'),'uploads/brands/');
        $brand->image = $fileURL;

        $brand->save();

        $catArray = explode(',', $req->categories);

        foreach($catArray as $catId) {
            $categoryMap = new ProductBrandCategoryMap();
            $categoryMap->cat_id = $catId;
            $categoryMap->brand_id = $brand->id;
            $categoryMap->save();
        }

        return redirect()->route('brands.index')->with('message', 'Your brand has been successfully added.');
    }


    public function edit($id)
    {
        $brand = null;
        $userType = Auth::user()->user_type;

        $brand = ProductBrands::findOrFail($id);

        $this->authorize('access-settings',$brand);

        if($brand == null)
            return view('not_found');

        $categoriMap = ProductBrandCategoryMap::where('brand_id', $id)->get();
        $existingCatMap="";
        foreach ($categoriMap as $key) {
            if($existingCatMap == "")
                $existingCatMap=$key->cat_id;
            else
                $existingCatMap =$existingCatMap.",".$key->cat_id;
        }

        $categories = ProductCategory::all();

        return view('admin.modules.brands.edit', compact("brand", "categories", "existingCatMap"));
    }



    public function update(Request $req, $id)
    {
        $helper = new HelperController();
    	$brand = ProductBrands::findOrFail($id);

        $this->authorize('access-settings',$brand);

    	$brand->name = $req->name;


        $fileURL = $helper->uploadImage($req->file('imgInp'),'uploads/brands/');

        if($fileURL){
            if($brand->image)
                @unlink($brand->image);

            $brand->image = $fileURL;

        }



        $categoriMap = ProductBrandCategoryMap::where('brand_id', $id)->delete();

        $brand->save();

        //dd($req->categories);

        $catArray = explode(',', $req->categories);

        foreach($catArray as $catId) {
            $categoryMap = new ProductBrandCategoryMap();
            $categoryMap->cat_id = $catId;
            $categoryMap->brand_id = $brand->id;
            $categoryMap->save();
        }


        return redirect()->route('brands.index')->with('message', 'Your brand has been successfully updated.');
    }

    public function destroy(ProductBrands $brand)
    {
        $this->authorize('access-settings',$brand);

        $child = $brand->categories()->delete();
        if($brand->image)
            @unlink($brand->image);
        $brand->delete();
        return redirect()->route('brands.index')->with('message', 'Your brand has been successfully deleted.');

    }
}
