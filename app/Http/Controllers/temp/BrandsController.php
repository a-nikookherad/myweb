<?php

namespace App\Http\Controllers;

use App\brands_model;
use App\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\controller;
use Illuminate\Support\Facades\DB;
class BrandsController extends Controller
{
    public function add_brand(Request $request)
    {
        //authorize users
        Controller::authorize_user();

        if ($request->hidden){
            $hidden=1;
        }else{
            $hidden=0;
        }
        if(brands_model::insert(['brand_name'=>$request->brand_name,'brand_desc'=>$request->brand_desc,'hidden'=>$hidden])){
            Session::put('msg1','successfully saved.');
            return redirect('admin/dashboard/addbrandpage');
        }else{
            Session::put('msg0','saved failed');
            return redirect('admin/dashboard/addbrandpage');
        }
    }

    public function hide($id)
    {
        //authorize users
        Controller::authorize_user();

        if(brands_model::where('brand_id', $id)->update(['hidden' => 1])){
            Session::put('msg', 'brand hidden is true!...');
        }
        return redirect('admin/dashboard/allbrandspage');
    }

    public function show($id)
    {
        //authorize users
        Controller::authorize_user();

        if(brands_model::where('brand_id', $id)->update(['hidden' => 0])){
            Session::put('msg', 'brand visible is true!...');
        }
        return redirect('admin/dashboard/allbrandspage');
    }

    public function delete($id)
    {
        //authorize users
        Controller::authorize_user();

        if(brands_model::where('brand_id', $id)->delete()){
            Session::put('msg', 'brand has been deleted!...');
        }
        return redirect('admin/dashboard/allbrandspage');
    }

    public function edit($id)
    {
        //authorize users
        Controller::authorize_user();

        $store = brands_model::where('brand_id', $id)->first();
        return view('admin/dashboard_stuff/edit_brand', compact('store'));
    }

    public function edit_post(Request $request)
    {
        //authorize users
        Controller::authorize_user();

        if ($request->hidden == 1) {
            $hidden = 1;
        } else {
            $hidden = 0;
        }
        if (brands_model::where('brand_id', $request->brand_id)->update(['brand_name' => $request->brand_name, 'brand_desc' => $request->brand_desc, 'hidden' => $hidden])) {
            Session::put('msg', 'brand edited successfully!...');
        }
        return redirect('admin/dashboard/allbrandspage');
    }

    public function front_brands($name,$id)
    {
        $all_brands=brands_model::get();
        $all_categories=categories::get();
        $stores=DB::table('tbl_products')
            ->where('brand_id',$id)
            ->get();
        return view('home_brands')->with(['stores'=>$stores,'all_brands'=>$all_brands,'all_categories'=>$all_categories]);
    }
}
