<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\slideReq;
use App\models\sliders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class slidersController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(['auth','usersMiddleware']);
//    }
    //

    public function list()
    {
        $all_sliders = sliders::all();
        return view('backend.items.sliders.list', compact('all_sliders'));
    }

    public function add()
    {
        return view('backend.items.sliders.add');
    }

    public function add_post(slideReq $request)
    {
        if ($request->input('slide_status') == 1) {
            $slide_status = 1;
        } else {
            $slide_status = 0;
        }
        if ($request->file('slide_img')) {
            $img = $request->file('slide_img');
            $imgfullname = str_random(5) . '.' . $img->getClientOriginalExtension();
            $dir = 'asset/upload/';
            if ($img->move($dir, $imgfullname)) {
                $src = $dir . $imgfullname;
            }else {
                $src = null;
            }
        }
        if ($request->file('slide_offer_img')) {
            $img1 = $request->file('slide_offer_img');
            $imgfullname1 = str_random(5) . '.' . $img1->getClientOriginalExtension();
            $dir1 = 'asset/upload/offers/';
            if ($img1->move($dir1, $imgfullname1)) {
                $src1 = $dir1 . $imgfullname1;
            } else {
                $src1 = null;
            }
        }else {
            $src1 = null;
        }
        $data = [
            'slide_title' => $request->input('slide_title'),
            'slide_desc' => $request->input('slide_desc'),
            'slide_img' => $src,
            'slide_offer_img' => $src1,
            'slide_status' => $slide_status,
        ];

        $obj_slide = sliders::create($data);
        if ($obj_slide instanceof sliders) {
            return redirect()->route('back.sliders.add')->with('msg', 'اسلاید با موفقیت اضافه شد.');
        }
    }

    public function edit($id)
    {
        $slide = sliders::find($id);
        return view('backend.items.sliders.edit', compact('slide'));
    }

    public function edit_post(slideReq $request, $id)
    {
        if ($request->input('slide_status') == 1) {
            $slide_status = 1;
        } else {
            $slide_status = 0;
        }
        $old_file=sliders::find($id);

        if ($request->file('slide_img')) {

            if (is_file($old_file->slide_img)) {
                unlink($old_file->slide_img);
            }
            $img = $request->file('slide_img');
            $imgfullname = str_random(5) . '.' . $img->getClientOriginalExtension();
            $dir = 'asset/upload/';
            if ($img->move($dir, $imgfullname)) {
                $src = $dir . $imgfullname;
            }
        }else {
            $src = null;
        }
        if ($request->file('slide_offer_img')) {

            if (is_file($old_file->slide_offer_img)) {
                unlink($old_file->slide_offer_img);
            }
            $img1 = $request->file('slide_offer_img');
            $imgfullname1 = str_random(5) . '.' . $img1->getClientOriginalExtension();
            $dir1 = 'asset/upload/offers/';
            if ($img1->move($dir1, $imgfullname1)) {
                $src1 = $dir1 . $imgfullname1;
            }
        }else {
            $src1 = null;
        }

        $data = [
            'slide_title' => $request->input('slide_title'),
            'slide_desc' => $request->input('slide_desc'),
            'slide_img' => $src,
            'slide_offer_img' => $src1,
            'slide_status' => $slide_status,
        ];
        if(empty($data['slide_img'])){
            unset($data['slide_img']);
        }
        if(empty($data['slide_offer_img'])){
            unset($data['slide_offer_img']);
        }

        $slide = sliders::find($id);
        if($slide instanceof  sliders) {
            $slide->update($data);
            return redirect()->route('back.sliders.list')->with('msg', 'اسلاید با موفقیت به روز رسانی شد.');
        }
    }

    public function show($id)
    {
        $slide = sliders::find($id);
        if ($slide instanceof sliders) {
            $slide->slide_status = 1;
            $slide->save();
        }
        return redirect()->route('back.sliders.list')->with('msg', 'اسلاید با موفقیت به نمایش درآمد');
    }

    public function hidden($id)
    {
        $slide = sliders::find($id);
        if ($slide instanceof sliders) {
            $slide->slide_status = 0;
            $slide->save();
        }
        return redirect()->route('back.sliders.list')->with('msg', 'اسلاید مخفی شد');
    }

    public function delete($id)
    {
        if ($id && ctype_digit($id)) {
            $slide = sliders::find($id);
            if ($slide instanceof sliders) {
                if (is_file($slide->slide_img)) {
                    unlink($slide->slide_img);
                }
                if (is_file($slide->slide_offer_img)) {
                    unlink($slide->slide_offer_img);
                }
                $slide->delete();
            }
        }
        return redirect()->route('back.sliders.list')->with('msg', 'اسلاید با موفقیت حذف شد');
    }
}
