<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\catReq;
use App\models\categories;
use App\models\subcategories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class categoriesController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(['auth','usersMiddleware']);
//    }
    //

    public function list()
    {
        $all_categories = categories::all();
        return view('backend.items.categories.list', compact('all_categories'));
    }

    public function add()
    {
        return view('backend.items.categories.add');
    }

    public function add_post(catReq $request)
    {
        $status=$request->has('cat_status');
        $data1 = [
            'cat_name' => $request->input('cat_name'),];
        $data2=[
            'cat_desc' => $request->input('cat_desc'),
            'cat_status' => $status,];

        $instance = categories::updateOrCreate($data1,$data2);
        if ($request->input('sub_cat_name')) {
            $data3 = [
                'sub_cat_name' => $request->input('sub_cat_name'),
                'cat_id' => $instance->id,
            ];
            subcategories::updateOrCreate($data3);
        }
        return redirect()->route('back.categories.add')->with('msg', 'دسته بندی با موفقیت ثبت شد');
    }

    public function edit($id)
    {
        $cat = categories::find($id);
        return view('backend.items.categories.edit', compact('cat'));
    }

    public function edit_post(catReq $request, $id)
    {
        $cat = categories::find($id);
        $request->input('cat_status') == 1 ? $status = 1 : $status = 0;
        $data = [
            'cat_name' => $request->input('cat_name'),
            'cat_desc' => $request->input('cat_desc'),
            'cat_status' => $status,
        ];
        if ($cat instanceof categories) {
            $cat->update($data);
            return redirect()->route('back.categories.list')->with('msg', 'دسته بندی به روز رسانی شد');
        }
    }

    public function delete($id)
    {
        $cat = categories::find($id);
        if ($cat instanceof categories) {
            $cat->delete();
            return redirect()->route('back.categories.list')->with('msg', 'دسته بندی با موفقیت حذف شد');
        }
    }
}
