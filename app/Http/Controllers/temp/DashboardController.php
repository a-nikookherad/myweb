<?php

namespace App\Http\Controllers;
use App\brands_model;
use App\categories;
use App\products_model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function add_category_page()
    {
        Controller::authorize_user();
        return view('admin/dashboard_stuff/add_category');
    }

    public function all_category_page()
    {
        //authorize users
        Controller::authorize_user();
        //show all categories into all_categoriy page
        $stores=categories::get();
        return view('admin.dashboard_stuff.all_category',compact('stores'));
    }

    public function add_brand_page()
    {
        //authorize users
        Controller::authorize_user();
        return view('admin.dashboard_stuff.add_brand_page');
    }

    public function all_brands_page()
    {
        //authorize users
        Controller::authorize_user();

        $stores=brands_model::get();
        //authorize users
        return view('admin.dashboard_stuff.all_brands_page',compact('stores'));
    }
    public function add_product_page()
    {
        //authorize users
        Controller::authorize_user();

        $all_categories=categories::get();
        $all_brands=brands_model::get();
        return view('admin.dashboard_stuff.add_product_page',compact(['all_categories','all_brands']));
    }

    public function all_products_page()
    {
        //authorize users
        Controller::authorize_user();

        $stores=DB::table('tbl_products')
            ->leftjoin('tbl_categories','tbl_products.cat_id','=','tbl_categories.cat_id')
            ->leftjoin('tbl_brands','tbl_products.brand_id','=','tbl_brands.brand_id')
            ->select('tbl_products.*','tbl_categories.cat_name','tbl_brands.brand_name')
            ->get();
        return view('admin.dashboard_stuff.all_products_page',compact(['stores','stores1','stores2']));

    }
}
