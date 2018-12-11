<?php

namespace App\Http\Controllers;

use App\brands_model;
use App\categories;
use Illuminate\Http\Request;
use App\products_model;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\controller;
class ProductsController extends Controller
{

    public function index()
    {
        return view('product_page');
    }

    public function add_product(Request $request)
    {
        //authorize users
        Controller::authorize_user();
        $img=$request->file('product_img');
        if ($img){
            $img_name=str_random(10).'.'.$img->getClientOriginalExtension();
            $dir='asset/upload/';
            $img_url=$dir.$img_name;
            if($img->move($dir,$img_name)){
                $product_img=$img_url;
            }else{
                $product_img=NULL;
            }
        }
        if ($request->hidden){
            $hidden=1;
        }else{
            $hidden=0;
        }
        if(products_model::insert(['product_name' => $request->product_name, 'product_desc' => $request->product_desc, 'product_description' => $request->product_description, 'product_color' => $request->product_color, 'product_price' => $request->product_price,'product_img' => $product_img, 'hidden' => $hidden,'cat_id' => $request->cat_id,'brand_id' => $request->brand_id])){
            Session::put('msg1','product record successfully saved.');
            return redirect('admin/dashboard/addproductpage');
        }else{
            Session::put('msg0','saved failed');
            return redirect('admin/dashboard/addproductpage');
        }
    }

    public function hide($id)
    {
        //authorize users
        Controller::authorize_user();

        if(products_model::where('product_id', $id)->update(['hidden' => 1])){
            Session::put('msg', 'product hidden is true!...');
        }
        return redirect('admin/dashboard/allproductspage');
    }

    public function show($id)
    {
        //authorize users
        Controller::authorize_user();

        if(products_model::where('product_id', $id)->update(['hidden' => 0])){
            Session::put('msg', 'product visible is true!...');
        }
        return redirect('admin/dashboard/allproductspage');
    }

    public function delete($id)
    {
        //authorize users
        Controller::authorize_user();
        if(products_model::where('product_id', $id)->delete()){
            Session::put('msg', 'product has been deleted!...');
        }
        return redirect('admin/dashboard/allproductspage');
    }

    public function edit($id)
    {
        //authorize users
        Controller::authorize_user();

        $store = products_model::where('product_id', $id)->first();
        $all_categories=categories::get();
        $all_brands=brands_model::get();
        return view('admin/dashboard_stuff/edit_product', compact(['store','all_categories','all_brands']));
    }

    public function edit_post(Request $request)
    {
        //authorize users
        Controller::authorize_user();

        $img=$request->file('product_img');
        if ($img){
            $img_name=str_random(10).'.'.$img->getClientOriginalExtension();
            $dir='asset/upload/';
            $img_url=$dir.$img_name;
            if($img->move($dir,$img_name)){
                $product_img=$img_url;
            }else{
                $product_img=NULL;
            }
        }
        if ($request->hidden){
            $hidden=1;
        }else{
            $hidden=0;
        }
        if(products_model::where('product_id',$request->product_id)->update(['product_name' => $request->product_name, 'product_desc' => $request->product_desc, 'product_description' => $request->product_description, 'product_color' => $request->product_color, 'product_price' => $request->product_price,'product_img' => $product_img, 'hidden' => $hidden,'cat_id' => $request->cat_id,'brand_id' => $request->brand_id])){
            Session::put('msg1','product record successfully saved.');
            return redirect('admin/dashboard/allproductspage');
        }else{
            Session::put('msg0','saved failed');
            return redirect('admin/dashboard/allproductspage');
        }
    }

    public function edit_product_page()
    {
        //authorize users
        Controller::authorize_user();

        return view('admin/dashboard_stuff/edit_product');
    }
}
