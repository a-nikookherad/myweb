<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\brands;
use App\Http\Requests\brandReq;

class brandsController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(['auth','usersMiddleware']);
//    }
    //

    public function list()
    {
        $all_brands=brands::all();
        return view('backend.items.brands.list',compact('all_brands'));
    }

    public function add()
    {
        return view('backend.items.brands.add');
    }

    public function add_post(brandReq $request)
    {
        if($request->input('brand_status')){
            $status=1;
        }else{
            $status=0;
        }
        $data=[
            'brand_name'=>$request->input('brand_name'),
            'brand_desc'=>$request->input('brand_desc'),
            'brand_status'=>$status,
        ];
        $instance=brands::create($data);
        if($instance instanceof brands){
            return redirect()->route('back.brands.add')->with('msg','برند با موفقیت ثبت شد');
        }
    }

    public function edit($id)
    {
        $brand=brands::find($id);
        return view('backend.items.brands.edit',compact('brand'));
    }

    public function edit_post(brandReq $request,$id)
    {
        $brand=brands::find($id);
        $request->input('brand_status')==1?$status=1:$status=0;
        $data=[
            'brand_name'  =>  $request->input('brand_name'),
            'brand_desc'  =>  $request->input('brand_desc'),
            'brand_status'  =>  $status,
        ];
        if($brand instanceof brands){
            $brand->update($data);
            return redirect()->route('back.brands.list')->with('msg','برند مورد نظر به روز رسانی شد');
        }
    }

    public function delete($id)
    {
        $brand=brands::find($id);
        if($brand instanceof brands){
            $brand->delete();
            return redirect()->route('back.brands.list')->with('msg','برند مورد نظر با موفقیت حذف شد');
        }
    }
}
