<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\HelperController;
use App\Models\DeliveryTime;
use App\Models\ProductColorMap;
use App\Models\ProductSizeMap;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Warehouse;
use App\Models\ProductAvailability;
use App\Models\ProductBrands;
use App\Models\ProductCategory;
use App\Models\ProductTags;
use App\Models\ProductSize;
use App\Models\ProductColor;
use App\Models\ProductCategoryMap;
use App\Models\ProductTagMap;
use App\Models\ProductGalleryMap;
use Auth;
use Illuminate\Support\Str;

class ProductsController extends HelperController
{
    public function index()
    {
        $products = null;
        $userType = Auth::user()->user_type;

        if (strtolower($userType) == "vendor") {
            $products = Products::orderBy('id','desc')->with('user')->where('user_id', Auth::id())->get();

        } else {
            $products = Products::orderBy('id','desc')->with('user')->get();

        }


        return view('admin.modules.products.index', compact("products"));
    }
    
    public function gallery(Products $product){
        $imgGallery = ProductGalleryMap::where('product_id', $product->id)->get();
        return view('admin.modules.products.gallery', compact("product", "imgGallery"));
    }


    public function create()
    {
        $warehouses = Warehouse::all();
        $avalabilitites = ProductAvailability::all();
        $brands = ProductBrands::all();
        $categories = ProductCategory::where('parent_id', 0)->with('user', 'childrens.childrens.user')->get();
        $tags = ProductTags::all();
        $productSizes = ProductSize::all();
        $productColors = ProductColor::all();
        $deliveries = DeliveryTime::all();
        return view('admin.modules.products.create', compact("warehouses", "avalabilitites", "categories", "brands", "tags", "productSizes", "productColors",'deliveries'));
    }

    public function edit($id)
    {
        $aProduct = Products::findOrFail($id);

        $this->authorize('access-settings', $aProduct);

        $warehouses = Warehouse::all();
        $avalabilitites = ProductAvailability::all();
        $brands = ProductBrands::all();
        $categories = ProductCategory::where('parent_id', 0)->with('user', 'childrens.childrens.user')->get();
        $tags = ProductTags::all();
        $productSizes = ProductSize::all();
        $productColors = ProductColor::all();
        $deliveries = DeliveryTime::all();

        $categoriMap = ProductCategoryMap::where('product_id', $id)->get();
        $existingCatMap = "";
        foreach ($categoriMap as $key) {
            if ($existingCatMap == "")
                $existingCatMap = $key->cat_id;
            else
                $existingCatMap = $existingCatMap . "," . $key->cat_id;
        }


        $tagMap = ProductTagMap::where('product_id', $id)->get();
        $existingTagMap = "";
        foreach ($tagMap as $key) {
            if ($existingTagMap == "")
                $existingTagMap = $key->tag_id;
            else
                $existingTagMap = $existingTagMap . "," . $key->tag_id;
        }

        $colorMap = ProductColorMap::where('product_id', $id)->get();
        $existingColorMap = "";
        foreach ($colorMap as $key) {
            if ($existingColorMap == "")
                $existingColorMap = $key->color_id;
            else
                $existingColorMap = $existingColorMap . "," . $key->color_id;
        }

        $sizeMap = ProductSizeMap::where('product_id', $id)->get();

        $existingSizeMap = "";
        foreach ($sizeMap as $key) {
            if ($existingSizeMap == "")
                $existingSizeMap = $key->size_id;
            else
                $existingSizeMap = $existingSizeMap . "," . $key->size_id;
        }


        $imgGallery = ProductGalleryMap::where('product_id', $id)->get();
        $galleryArray = "";
        foreach ($imgGallery as $key) {
            if ($galleryArray == "")
                $galleryArray = $key->id . "," . $key->image_url;
            else
                $galleryArray = $galleryArray . "?" . $key->id . "," . $key->image_url;
        }


        return view('admin.modules.products.edit', compact("warehouses", "avalabilitites", "categories", "brands", "tags", "productSizes", "productColors", "aProduct", "existingCatMap", "existingTagMap", "galleryArray", 'existingColorMap', 'existingSizeMap','deliveries'));
    }

    public function copy($id)
    {
        $aProduct = Products::findOrFail($id);

        $this->authorize('access-settings', $aProduct);

        $warehouses = Warehouse::all();
        $avalabilitites = ProductAvailability::all();
        $brands = ProductBrands::all();
        $categories = ProductCategory::where('parent_id', 0)->with('user', 'childrens.childrens.user')->get();
        $tags = ProductTags::all();
        $productSizes = ProductSize::all();
        $productColors = ProductColor::all();
        $deliveries = DeliveryTime::all();

        $categoriMap = ProductCategoryMap::where('product_id', $id)->get();
        $existingCatMap = "";
        foreach ($categoriMap as $key) {
            if ($existingCatMap == "")
                $existingCatMap = $key->cat_id;
            else
                $existingCatMap = $existingCatMap . "," . $key->cat_id;
        }


        $tagMap = ProductTagMap::where('product_id', $id)->get();
        $existingTagMap = "";
        foreach ($tagMap as $key) {
            if ($existingTagMap == "")
                $existingTagMap = $key->tag_id;
            else
                $existingTagMap = $existingTagMap . "," . $key->tag_id;
        }

        $colorMap = ProductColorMap::where('product_id', $id)->get();
        $existingColorMap = "";
        foreach ($colorMap as $key) {
            if ($existingColorMap == "")
                $existingColorMap = $key->color_id;
            else
                $existingColorMap = $existingColorMap . "," . $key->color_id;
        }

        $sizeMap = ProductSizeMap::where('product_id', $id)->get();

        $existingSizeMap = "";
        foreach ($sizeMap as $key) {
            if ($existingSizeMap == "")
                $existingSizeMap = $key->size_id;
            else
                $existingSizeMap = $existingSizeMap . "," . $key->size_id;
        }


        $imgGallery = ProductGalleryMap::where('product_id', $id)->get();
        $galleryArray = "";
        foreach ($imgGallery as $key) {
            if ($galleryArray == "")
                $galleryArray = $key->id . "," . $key->image_url;
            else
                $galleryArray = $galleryArray . "?" . $key->id . "," . $key->image_url;
        }


        return view('admin.modules.products.copy', compact("warehouses", "avalabilitites", "categories", "brands", "tags", "productSizes", "productColors", "aProduct", "existingCatMap", "existingTagMap", "galleryArray", 'existingColorMap', 'existingSizeMap','deliveries'));
    }

    public function store(Request $request)
    {

        $helper = new HelperController();

        /*
        *
        * Insert product table data **/

        $title = $request->title;

        //dd($title);

        $oldProduct = Products::where('slug', Str::slug($title))->first();


        if ($oldProduct)
            $title = $title . ' Copy ';


        $product = new Products();
        $product->title = $title;
        $product->slug = Str::slug($title);
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->sku = $request->sku;
        $product->old_price = $request->old_price;
        $product->new_price = $request->new_price;
        $product->shipping_charge = $request->shipping_charge;
        $product->delivery_id = $request->delivery_id;
        $product->height = $request->height;
        $product->width = $request->width;
        $product->weight = $request->weight;
        $product->is_published = $request->has('is_published');
        $product->is_new = $request->has('is_new');
        $product->is_feature = $request->has('is_feature');
        $product->allow_review = $request->has('allow_review');
        $product->show_on_home = $request->has('show_on_home');
        $product->user_id = Auth::id();
        $product->availability_id = $request->availability_id;
        $product->size_id = $request->size_id;
        $product->color_id = $request->color_id;
        $product->brand_id = $request->brand_id;
        $product->available_start_date = $request->available_start_date;
        $product->available_end_date = $request->available_end_date;
        $product->is_inventory = $request->has('is_inventory');

        /*
        * Has inventory */
        if ($request->has('is_inventory')) {
            $product->inventory_qty = $request->inventory_qty;
            $product->minimum_inventory_qty = $request->minimum_inventory_qty;
            $product->notify_low_inventory = $request->has('notify_low_inventory');
            $product->Warehouse_id = $request->Warehouse_id;
            $product->minimum_inventory_qty = $request->minimum_inventory_qty;
        }
        $product->show_availability = $request->has('show_availability');

        /*
       * Check SEO switch */
        $product->allow_seo = $request->has('allow_seo');
        if ($request->has('allow_seo')) {
            $product->meta_keywords = $request->meta_keywords;
            $product->meta_description = $request->meta_description;
        }


        /*
        *
        * Upload featured image and return path url */
        $fileURL = $helper->uploadImage($request->file('imgInp'), 'uploads/products/u_' . Auth::id() . "/", 220, 220);

        $product->featured_image = $fileURL;


        /*
        * Save Products **/
        $product->save();


        //dd($request->file('images'));
        /*
        *
        *Upload and generate gallery image urls*/
        if ($files = $request->file('images')) {
            foreach ($files as $file) {

                $test = $helper->uploadImage($file, 'uploads/products/u_' . Auth::id() . "/gallery/thumb/", 100, 100);

                $glURL = $helper->uploadImage($file, 'uploads/products/u_' . Auth::id() . "/gallery/");

                $gallery = new ProductGalleryMap();
                $gallery->image_url = $glURL;
                $gallery->thumb_url = $test;
                $gallery->product_id = $product->id;
                $gallery->save();
            }
        }


        /*
        *
        *Save selected categories*/
        if ($request->categories) {
            $catArray = explode(',', $request->categories);

            foreach ($catArray as $catId) {
                $categoryMap = new ProductCategoryMap();

                $categoryMap->cat_id = $catId;
                $categoryMap->is_published = $request->has('is_published');
                $categoryMap->product_id = $product->id;
                $categoryMap->save();
            }
        }

        /*
        *
        *Save selected tags*/
        if ($request->tags) {
            $tagArray = explode(',', $request->tags);

            foreach ($tagArray as $catId) {
                $tagMap = new ProductTagMap();
                $tagMap->tag_id = $catId;
                $tagMap->product_id = $product->id;
                $tagMap->save();
            }
        }

        if ($request->color) {
            $colorArr = explode(',', $request->color);

            foreach ($colorArr as $colorId) {
                $productColorMap = new ProductColorMap();

                $productColorMap->color_id = $colorId;
                $productColorMap->product_id = $product->id;
                $productColorMap->save();
            }
        }

        if ($request->size) {
            $sizeArray = explode(',', $request->size);

            foreach ($sizeArray as $sizeId) {
                $productSizeMap = new ProductSizeMap();
                $productSizeMap->size_id = $sizeId;
                $productSizeMap->product_id = $product->id;
                $productSizeMap->save();
            }
        }

        return redirect(route('products.index'))->with('message', 'Your product has been successfully added.');

    }
    
    


    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $this->authorize('access-settings', $product);
//        dd($request->all());
        $helper = new HelperController();
        /*
        *
        * Insert product table data **/


        $product->title = $request->title;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->sku = $request->sku;
        $product->old_price = $request->old_price;
        $product->new_price = $request->new_price;
        $product->shipping_charge = $request->shipping_charge;
        $product->height = $request->height;
        $product->width = $request->width;
        $product->weight = $request->weight;
        $product->delivery_id = $request->delivery_id;
        $product->is_published = $request->has('is_published');
        $product->is_new = $request->has('is_new');
        $product->is_feature = $request->has('is_feature');
        $product->allow_review = $request->has('allow_review');
        $product->show_on_home = $request->has('show_on_home');
        $product->user_id = Auth::id();
        $product->availability_id = $request->availability_id;
        $product->size_id = $request->size_id;
        $product->color_id = $request->color_id;
        $product->brand_id = $request->brand_id;
        $product->available_start_date = $request->available_start_date;
        $product->available_end_date = $request->available_end_date;
        $product->is_inventory = $request->has('is_inventory');

        /*
        * Has inventory */
        if ($request->has('is_inventory')) {
            $product->inventory_qty = $request->inventory_qty;
            $product->minimum_inventory_qty = $request->minimum_inventory_qty;
            $product->notify_low_inventory = $request->has('notify_low_inventory');

            $product->Warehouse_id = $request->Warehouse_id;
            $product->minimum_inventory_qty = $request->minimum_inventory_qty;

        }
        $product->show_availability = $request->has('show_availability');
        /*
        * Check SEO switch */
        $product->allow_seo = $request->has('allow_seo');
        if ($request->has('allow_seo')) {
            $product->meta_keywords = $request->meta_keywords;
            $product->meta_description = $request->meta_description;
        }


        /*
        *
        * Upload featured image and return path url */
        $fileURL = $helper->uploadImage($request->file('imgInp'), 'uploads/products/u_' . Auth::id() . "/", 220, 220);


        /*
        *
        * Has new path delete existing url */
        if ($fileURL) {
            if ($product->featured_image)
                @unlink($product->featured_image);

            $product->featured_image = $fileURL;
        }

        /*
        * Save Products **/
        $product->save();


        /*
        *
        *Delete existing gallery images from server**/




        if ($request->file('images')) {
            /*$imgGallery = ProductGalleryMap::where('product_id', $id)->get();
            $deleteGalery = ProductGalleryMap::where('product_id', $id)->delete();
            foreach ($imgGallery as $key) {
                @unlink($key->image_url);
            }*/

        }


        
        /*
        *
        *Upload and generate gallery image urls*/
        if ($files = $request->file('images')) {
            //dd($request->file('images'));

            foreach ($files as $file) {
               
                $test = $helper->uploadImage($file, 'uploads/products/u_' . Auth::id() . "/gallery/thumb/", 100, 100);

                $glURL = $helper->uploadImage($file, 'uploads/products/u_' . Auth::id() . "/gallery/");

                $gallery = new ProductGalleryMap();
                $gallery->image_url = $glURL;
                $gallery->thumb_url = $test;
                $gallery->product_id = $product->id;
                $gallery->save();
            }
        }


        /*
        *
        *Delete existing categories**/
        $deleteCat = ProductCategoryMap::where('product_id', $id)->delete();

        /*
        *
        *Save selected categories*/
        if ($request->categories) {
            $catArray = explode(',', $request->categories);

            foreach ($catArray as $catId) {
                $categoryMap = new ProductCategoryMap();
                $categoryMap->cat_id = $catId;
                $categoryMap->is_published = $request->has('is_published');
                $categoryMap->product_id = $product->id;
                $categoryMap->save();
            }
        }


        /*
        *
        *Delete existing tags*/
        $deleteTag = ProductTagMap::where('product_id', $id)->delete();

        /*
        *
        *Save selected tags*/
        if ($request->tags) {
            $tagArray = explode(',', $request->tags);

            foreach ($tagArray as $catId) {
                $tagMap = new ProductTagMap();
                $tagMap->tag_id = $catId;
                $tagMap->product_id = $product->id;
                $tagMap->save();
            }
        }


        /*Delete existing tags*/
        $deleteColor = ProductColorMap::where('product_id', $id)->delete();

        if ($request->color) {
            $colorArr = explode(',', $request->color);

            foreach ($colorArr as $colorId) {
                $productColorMap = new ProductColorMap();

                $productColorMap->color_id = $colorId;
                $productColorMap->product_id = $product->id;
                $productColorMap->save();
            }
        }

        /*Delete existing tags*/
        $deleteColor = ProductSizeMap::where('product_id', $id)->delete();

        if ($request->size) {
            $sizeArray = explode(',', $request->size);

            foreach ($sizeArray as $sizeId) {
                $productSizeMap = new ProductSizeMap();
                $productSizeMap->size_id = $sizeId;
                $productSizeMap->product_id = $product->id;
                $productSizeMap->save();
            }
        }

        return redirect(route('products.index'))->with('message', 'Your product has been successfully updated.');

    }
    
    public function destroyGallery(ProductGalleryMap $gallery){
        
        @unlink($gallery->image_url);
        $gallery->delete();
        return redirect()->back()->with('message', 'Image has been successfully deleted.');
    }

    public function destroy($id)
    {
        /*
         *
         * Delete product galleries
         *
         */
        $imgGallery = ProductGalleryMap::where('product_id', $id)->get();
        $deleteGalery = ProductGalleryMap::where('product_id', $id)->delete();
        foreach ($imgGallery as $key) {
            @unlink($key->image_url);
        }


        /*
        *
        *Delete existing categories**/
        $deleteCat = ProductCategoryMap::where('product_id', $id)->delete();

        /*
       *
       *Delete existing tags*/
        $deleteTag = ProductTagMap::where('product_id', $id)->delete();

        /*Delete existing tags*/
        $deleteColor = ProductColorMap::where('product_id', $id)->delete();

        /*Delete existing tags*/
        $deleteColor = ProductSizeMap::where('product_id', $id)->delete();

        $product= Products::findOrFail($id);

        $product->delete();
        return redirect(route('products.index'))->with('message', 'Your product has been successfully deleted.');

    }
}
