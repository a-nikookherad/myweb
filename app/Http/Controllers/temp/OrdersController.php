<?php

namespace App\Http\Controllers;

use App\products_model;
use Illuminate\Http\Request;
use App\brands_model;
use App\categories;
use Illuminate\Support\Facades\DB;
use App\orders_model;
use phpDocumentor\Reflection\Types\Compound;

class OrdersController extends Controller
{
    public function order(Request $request)
    {

    }

    public function order_page($id)
    {
        $all_brands=brands_model::get();
        $all_categories=categories::get();
        $stores=DB::table('tbl_products')
            ->leftjoin('tbl_categories','tbl_categories.cat_id','=','tbl_products.cat_id')
            ->leftjoin('tbl_brands','tbl_products.brand_id','=','tbl_brands.brand_id')
            ->select('tbl_products.*','tbl_categories.cat_id','tbl_categories.cat_name','tbl_brands.brand_id','tbl_brands.brand_name')
            ->limit(8)
            ->get();
        $storage=DB::table('tbl_products')->where('product_id',$id)->first();
        return view('order_page')->with(['storage'=>$storage,'stores'=>$stores,'all_brands'=>$all_brands,'all_categories'=>$all_categories]);
    }
}
