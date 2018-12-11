<?php

namespace App\Http\Controllers\frontend;

use App\models\brands;
use App\models\categories;
use App\models\siteInfo;
use App\models\sliders;
use App\models\subcategories;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\products;

class homeController extends Controller
{
    //
    public function index()
    {
        $sliders=sliders::all();
        if(!cache()->has('cache_products')){
            $products=products::all();
            cache()->put('cache_products',$products,Carbon::now()->addMinutes(2));
        }else{
            $products=cache('cache_products');
        }
        $categories=categories::all();
        $siteinfo=siteInfo::all()->first();
        $brands=brands::all();
        return view('home',compact('products','sliders','categories','siteinfo','brands'));
    }

    public function contact_us()
    {
        $siteinfo=siteInfo::all()->first();
        return view('frontend.items.contact_us.contact_us',compact('siteinfo'));
    }

    public function about_us()
    {
        $siteinfo=siteInfo::all()->first();
        return view('frontend.items.about_us.about_us',compact('siteinfo'));
    }

    public function detail($id)
    {
        $product=products::find($id);
        $products=products::all();
        $siteinfo=siteInfo::all()->first();
//        $sliders=sliders::all();
        $categories=categories::all();
        $brands=brands::all();
        return view('frontend.items.product_details.details',compact('product','products','siteinfo','categories','brands'));
    }

    public function sub($id)
    {
        $sliders=sliders::all();
        $sub=subcategories::find($id);
        $products=$sub->products()->get();
        $categories=categories::all();
        $siteinfo=siteInfo::all()->first();
        $brands=brands::all();
        return view('frontend.items.subcategories.sub_categories',compact('products','sliders','categories','siteinfo','brands'));
    }
    public function brand($id)
    {
        $sliders=sliders::all();
        $brand=brands::find($id);
        $products=$brand->products()->get();
        $categories=categories::all();
        $siteinfo=siteInfo::all()->first();
        $brands=brands::all();
        return view('frontend.items.brands.brands',compact('products','sliders','categories','siteinfo','brands'));
    }
}
