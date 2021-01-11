<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->count();
        $customers = DB::table('users')->where('users.user_type', 'Customer')->count();
        $orders = DB::table('orders')->count();
        $amounts = DB::table('orders')->select(DB::Raw('sum(orders.total_amount) as amount'))->first();

        $amounts = $amounts->amount;


        $recentOrders = DB::table('orders')
            ->join('order_products', 'order_products.order_id', '=', 'orders.id')
            ->join('products', 'order_products.product_id', '=', 'products.id')
            ->select('orders.*', 'products.user_id')
            ->orderBy('orders.id', 'desc')
            ->take(15)
            ->get();

    	return view('admin.dashboard', compact('products', 'customers', 'orders', 'amounts', 'recentOrders'));
    }

    public function index_copy()
    {
    	return view('admin.dashboard_main');
    }


    public function monthlySellChartData()
    {
        $monthlySell = DB::table('orders as o')
            ->select(array(DB::Raw('sum(o.total_amount) as orders'),
                DB::Raw('DATE_FORMAT((o.created_at),"%b %Y") month'),
                /*DB::Raw('sum(o.total_amount) as amount'),
                DB::Raw('DATE_FORMAT((o.created_at),"%b %Y") amount_month'),*/
                ))
            ->groupBy('month')
            ->get();

        return response()->json($monthlySell);
    }

    public function dailySellChartData()
    {
        $currentMonth = date('m');

        $monthlySell = DB::table('orders as o')
            ->select(array(DB::Raw('sum(o.total_amount) as orders'),
                DB::Raw('DATE_FORMAT((o.created_at),"%D %b") month'),
                ))
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->groupBy('month')
            ->get();

        return response()->json($monthlySell);
    }

    public function productSellByCategory()
    {
        $categoryGroup = DB::table('product_categories')
            ->join('product_category_maps', 'product_category_maps.cat_id', 'product_categories.id')
            ->join('order_products', 'order_products.product_id', 'product_category_maps.product_id')
            ->join('orders', 'orders.id', 'order_products.order_id')
            ->select('product_categories.category_name',
                DB::Raw('count(orders.id) as total_order'))
            ->groupBy('product_categories.category_name')
            ->get();

        return response()->json($categoryGroup);
    }


    public function productCountByCategory()
    {
        $categoryGroup = DB::table('product_categories')
            ->join('product_category_maps', 'product_category_maps.cat_id', 'product_categories.id')
            ->join('products', 'products.id', 'product_category_maps.product_id')
            ->select('product_categories.category_name',
                DB::Raw('count(products.id) as total_product'))
            ->groupBy('product_categories.category_name')
            ->get();

        return response()->json($categoryGroup);
    }
}
