<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ProductBrandCategoryMap;
use App\Models\ProductBrands;
use App\Models\ProductCategory;
use App\Models\ProductCategoryMap;
use App\Models\ProductColorMap;
use App\Models\ProductGalleryMap;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\ProductSizeMap;
use App\Models\User\CartItem;
use App\Models\User\ProductReview;
use App\Models\User\Wishlist;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function index($category, Request $request)
    {


        $page_size = $request->query('page_size') ? $request->query('page_size') : 15;
        $minPrice = $request->query('min') ? $request->query('min') : 10;
        $mixPrice = $request->query('max') ? $request->query('max') : 30000;
        $brandId = $request->query('brand') ? $request->query('brand') : 0;


        $order = $request->query('order') ? $request->query('order') : 0;
        $requestString = $request->all();


        $orderColumn = "";
        $orderOrdering = "";
        $sortText = "Default";

        if ($order == 0) {
            $orderColumn = "products.id";
            $orderOrdering = "desc";
            $sortText = "Default";
        } else if ($order == 1) {
            $orderColumn = "products.title";
            $orderOrdering = "asc";
            $sortText = "A - Z";
        } else if ($order == 2) {
            $orderColumn = "products.title";
            $orderOrdering = "desc";
            $sortText = "Z - A";
        } else if ($order == 3) {
            $orderColumn = "products.new_price";
            $orderOrdering = "asc";
            $sortText = "Price Low - High";
        } else if ($order == 4) {
            $orderColumn = "products.new_price";
            $orderOrdering = "desc";
            $sortText = "Price High - Low";
        } else {
            $orderColumn = "products.new_price";
            $orderOrdering = "asc";
            $sortText = "Price Low - High";
        }

        $categoryDetails = ProductCategory::where('slug', $category)->first();

        if (is_null($categoryDetails)) {
            return view('user.error_pages.404');
        }

        $products = DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('products.is_published', 1)
            ->where('product_category_maps.cat_id', $categoryDetails->id)
            ->where('products.new_price', '>=', $minPrice)
            ->where('products.new_price', '<=', $mixPrice);

        if ($request->query('size')) {

            $products = $products
                ->join('product_size_maps', 'products.id', '=', 'product_size_maps.product_id')
                ->where('product_size_maps.size_id', $request->query('size'));

        }

        if ($request->query('color')) {

            $products = $products
                ->join('product_color_maps', 'products.id', '=', 'product_color_maps.product_id')
                ->where('product_color_maps.color_id', $request->query('color'));
        }

        if ($brandId > 0) {
            $products = $products
                ->where('products.brand_id', $brandId);
        }

        $products = $products
            ->orderBy($orderColumn, $orderOrdering)
            ->distinct();

        $brands = ProductBrands::distinct()->get();
        $colors = ProductColor::distinct()->get();
        $sizes = ProductSize::distinct()->get();

        $products = $products->paginate($page_size)
            ->appends([
                'page_size' => $request->query('page_size'),
                'order' => $request->query('order'),
                'max' => $request->query('min'),
                'min' => $request->query('max'),
                'brand' => $request->query('brand'),
                'color' => $request->query('color'),
                'size' => $request->query('size'),
            ]);

        //$products = ProductCategoryMap::with('product')->where(['cat_id' => $categoryDetails->id, 'is_published' => 1])->paginate($page_size);

        return view('user.pages.products.index', compact("products", "categoryDetails", "requestString", "brands", "colors", 'sortText', 'sizes'));
    }

    public function search(Request $request)
    {

        $page_size = $request->query('page_size') ? $request->query('page_size') : 15;
        $minPrice = $request->query('min') ? $request->query('min') : 10;
        $mixPrice = $request->query('max') ? $request->query('max') : 30000;
        $brandId = $request->query('brand') ? $request->query('brand') : 0;
        $order = $request->query('order') ? $request->query('order') : 0;
        //$colorId = $request->query('color') ? $request->query('color') : 0;
        $searchText = $request->query('s') ? $request->query('s') : '';
        $requestString = $request->all();

        $orderColumn = "";
        $orderOrdering = "";
        $sortText = "Default";

        if ($order == 0) {
            $orderColumn = "products.id";
            $orderOrdering = "desc";
            $sortText = "Default";
        } else if ($order == 1) {
            $orderColumn = "products.title";
            $orderOrdering = "asc";
            $sortText = "A - Z";
        } else if ($order == 2) {
            $orderColumn = "products.title";
            $orderOrdering = "desc";
            $sortText = "Z - A";
        } else if ($order == 3) {
            $orderColumn = "products.new_price";
            $orderOrdering = "asc";
            $sortText = "Price Low - High";
        } else if ($order == 4) {
            $orderColumn = "products.new_price";
            $orderOrdering = "desc";
            $sortText = "Price High - Low";
        } else {
            $orderColumn = "products.new_price";
            $orderOrdering = "asc";
            $sortText = "Price Low - High";
        }




        $products = DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('products.is_published', 1)
            ->where('products.title', 'like', '%' . $searchText . '%')
            ->where('products.new_price', '>=', $minPrice)
            ->where('products.new_price', '<=', $mixPrice)
            ->where('products.new_price', '<=', $mixPrice);

        if ($request->query('color')) {
            $products = $products
                ->join('product_color_maps', 'products.id', '=', 'product_color_maps.product_id')
                ->where('product_color_maps.color_id', $request->query('color'));
        }

        if ($request->query('size')) {
            $products = $products
                ->join('product_size_maps', 'products.id', '=', 'product_size_maps.product_id')
                ->where('product_size_maps.size_id', $request->query('size'));
        }

        if ($brandId > 0) {
            $products = $products
                ->where('products.brand_id', $brandId);
        }

        $products = $products
            ->orderBy($orderColumn, $orderOrdering)
            ->distinct();



        $brands = ProductBrands::distinct()->get();
        $colors = ProductColor::distinct()->get();
        $sizes = ProductSize::distinct()->get();

        $products = $products->paginate($page_size)
            ->appends([
                'page_size' => $request->query('page_size'),
                'order' => $request->query('order'),
                'max' => $request->query('min'),
                'min' => $request->query('max'),
                'brand' => $request->query('brand'),
                'color' => $request->query('color'),
                'size' => $request->query('size'),
            ]);;

        $categories = ProductCategory::with('childrens')->where('parent_id', 0)->get();


        //dd($categories);

        return view('user.pages.products.search', compact('products', 'categories', 'brands', 'colors', 'sortText', 'sizes'));
    }

    public function details($category, $slug)
    {
        $product = Products::where('slug', $slug)->with('productColorMaps.color', 'productSizeMaps.size')->firstOrFail();

        $categoryList = ProductCategoryMap::where('product_id', $product->id)->get();
        $galleries = ProductGalleryMap::where('product_id', $product->id)->get();

        $productReviews = ProductReview::where('product_id', $product->id)->get();


        return view('user.pages.products.details', compact('product', 'categoryList', 'galleries', 'productReviews'));
    }

    public function show($slug)
    {
        $product = Products::where('slug', $slug)->firstOrFail();
        $categoryList = ProductCategoryMap::where('product_id', $product->id)->get();
        $galleries = ProductGalleryMap::where('product_id', $product->id)->get();

        $productReviews = ProductReview::where('product_id', $product->id)->get();

        return view('user.pages.products.details', compact('product', 'categoryList', 'galleries', 'productReviews'));
    }

    public function add_to_cart(Request $request)
    {


        $cartItem = CartItem::where(['product_id' => $request->product_id, 'user_id' => Auth::id()])->first();

        if ($cartItem == null)
            $cartItem = new CartItem();

        if ($cartItem)
            $cartItem->quantity = ($cartItem->quantity + $request->quantity);
        else
            $cartItem->quantity = $request->quantity;

        $cartItem->user_id = Auth::id();
        $cartItem->product_id = $request->product_id;
        $cartItem->size = $request->size;
        $cartItem->save();

        $myCartList = CartItem::with('product')->where('user_id', Auth::id())->get();
        $arr = array('data' => $myCartList, 'status' => true);

        if ($request->form == "details")
            return redirect()->back();

        return Response()->json($arr);
    }

}
