<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\tags;
class tagsController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(['auth','usersMiddleware']);
//    }
    //

    public function list()
    {
        $all_tags=tags::all();
        return view('backend.items.tags.list',compact('all_tags'));
    }

    public function add()
    {
        return view('backend.items.tags.add');
    }

    public function add_post(Request $request)
    {
        $this-> validate($request, ['tag_name'=>'required'],['tag_name.required'=>'لطفا نام تگ را وارد کنید']);
        $data=['tag_name'=>$request->input('tag_name')];
        $instance=tags::create($data);
        if($instance instanceof tags){
            return redirect()->route('back.tags.add')->with('msg','تگ جدید با موفقیت ثبت شد');
        }
    }

    public function edit($id)
    {
        $tag=tags::find($id);
        return view('backend.items.tags.edit',compact('tag'));
    }

    public function edit_post(Request $request,$id)
    {
        $this-> validate($request, ['tag_name'=>'required'],['tag_name.required'=>'لطفا نام تگ را وارد کنید']);
        $tag=tags::find($id);
        $data=[
            'tag_name'  =>  $request->input('tag_name'),
        ];
        if($tag instanceof tags){
            $tag->update($data);
            return redirect()->route('back.tags.list')->with('msg','تگ مورد نظر به روز رسانی شد');
        }
    }

    public function delete($id)
    {
        $tag=tags::find($id);
        if($tag instanceof tags){
            $tag->delete();
            return redirect()->route('back.tags.list')->with('msg','تگ مورد نظر با موفقیت حذف شد');
        }
    }
}
