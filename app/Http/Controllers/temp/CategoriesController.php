<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\controller;

class CategoriesController extends Controller
{
    public function add_cat(Request $request)
    {
        $cat_name=$request->cat_name;
        $cat_desc=$request->cat_desc;
        if ($request->hidden){
            $hidden=1;
        }else{
            $hidden=0;
        }
        if(categories::insert(['cat_name'=>$cat_name,'cat_desc'=>$cat_desc,'hidden'=>$hidden])){
            Session::put('msg1','success save.');
            return redirect('admin/dashboard/addcategory');
        }else{
            Session::put('msg0','save failed');
            return redirect('admin/dashboard/addcategory');
        }
    }
}
