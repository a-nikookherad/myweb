<?php

namespace App\Http\Controllers;

use App\categories;
use App\brands_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoriesActionController extends Controller
{
    public function delete($id)
    {
        //authorize users
        Controller::authorize_user();

        if(categories::where('cat_id', $id)->delete()){
            Session::put('msg', 'category has been deleted!...');
        }
        return redirect('admin/dashboard/allcategory');
    }

    public function show($id)
    {
        //authorize users
        Controller::authorize_user();

        if(categories::where('cat_id', $id)->update(['hidden' => 0])){
            Session::put('msg', 'category visible is true!...');
        }
        return redirect('admin/dashboard/allcategory');
    }

    public function hide($id)
    {
        //authorize users
        Controller::authorize_user();
        if(categories::where('cat_id', $id)->update(['hidden' => 1])){
            Session::put('msg', 'category hidden is true!...');
        }
        return redirect('admin/dashboard/allcategory');
    }

    public function edit($id)
    {
        //authorize users
        Controller::authorize_user();
        $store = categories::where('cat_id', $id)->first();
        return view('admin/dashboard_stuff/edit_category', compact('store'));
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
        if (categories::where('cat_id', $request->cat_id)->update(['cat_name' => $request->cat_name, 'cat_desc' => $request->cat_desc, 'hidden' => $hidden])) {
            Session::put('msg', 'category edited successfully!...');
        }
        return redirect('admin/dashboard/allcategory');
    }

    public function front_categories($name,$id)
    {
        $all_brands=brands_model::get();
        $all_categories=categories::get();
        $stores=DB::table('tbl_products')
            ->where('cat_id',$id)
            ->get();
        return view('home_categories')->with(['stores'=>$stores,'all_brands'=>$all_brands,'all_categories'=>$all_categories]);
    }


}
