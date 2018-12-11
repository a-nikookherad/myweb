<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\add_product;
use App\models\brands;
use App\models\categories;
use App\models\products;
use App\models\siteInfo;
use App\models\sliders;
use App\models\subcategories;
use App\models\tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use tests\Mockery\Adapter\Phpunit\EmptyTestCase;

class productsController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(['auth','usersMiddleware']);
//    }
    //

    public function list()
    {
        $all_products = products::all();
        $categories=categories::all();
        $brands=brands::all();
        return view('backend.items.products.list', compact('all_products','categories','brands'));
    }

    public function add()
    {

        $categories=categories::all();
        $tags=tags::all();
        $brands=brands::all();
        return view('backend.items.products.add',compact('categories','brands','tags'));
    }

    public function add_post(add_product $request)
    {
        $product_status = $request->has('product_status');
        if ($request->file('product_img')) {
            $img = $request->file('product_img');
            $imgfullname = str_random(5) . '.' . $img->getClientOriginalExtension();
            $dir = 'asset/upload/';
            if ($img->move($dir, $imgfullname)) {
                $src = $dir . $imgfullname;
            } else {
                $src = null;
            }
        }
        if ($request->file('product_offer_img')) {
            $img1 = $request->file('product_offer_img');
            $imgfullname1 = str_random(5) . '.' . $img1->getClientOriginalExtension();
            $dir1 = 'asset/upload/';
            if ($img1->move($dir1, $imgfullname1)) {
                $src1 = $dir1 . $imgfullname1;
            } else {
                $src1 = null;
            }
        }
        $data = [
            'product_name' => $request->input('product_name'),
            'product_desc' => $request->input('product_desc'),
            'product_description' => $request->input('product_description'),
            'product_color' => $request->input('product_color'),
            'product_price' => $request->input('product_price'),
            'product_qty' => $request->input('product_qty'),
            'product_img' => $src,
            'product_offer_img' => $src1,
            'product_status' => $product_status,
            'cat_id' => $request->input('cat_id'),
            'sub_cat_id' => $request->input('sub_cat_id'),
            'brand_id' => $request->input('brand_id'),
            'tag_id' => $request->input('tag_id'),
        ];
        $obj_product = products::create($data);
        if ($obj_product instanceof products) {
            return redirect()->route('back.products.add')->with('msg', 'محصول با موفقیت ثبت شد.');
        }
    }

    public function edit($id)
    {
        $categories=categories::all();
        $tags=tags::all();
        $brands=brands::all();
        $product = products::find($id);
        return view('backend.items.products.edit', compact('product','categories','brands','tags'));
    }

    public function edit_post(add_product $request, $id)
    {
        $product_status = $request->has('product_status');
        $oldfile=products::find($id);
        if ($request->file('product_img')){
            if (is_file($oldfile->product_img)){
                unlink($oldfile->product_img);
            }
            $img = $request->file('product_img');
            $imgfullname = str_random(5) . '.' . $img->getClientOriginalExtension();
            $dir = 'asset/upload/';
            if ($img->move($dir, $imgfullname)) {
                $src = $dir . $imgfullname;
            }
        }else {
            $src=null;
        }
        if ($request->file('product_offer_img')){
            if (is_file($oldfile->product_offer_img)){
                unlink($oldfile->product_offer_img);
            }
            $img1 = $request->file('product_offer_img');
            $imgfullname1 = str_random(5) . '.' . $img1->getClientOriginalExtension();
            $dir1 = 'asset/upload/';
            if ($img1->move($dir1, $imgfullname1)) {
                $src1 = $dir1 . $imgfullname1;
            }
        }else {
            $src1=null;
        }
        $data = [
            'product_name' => $request->input('product_name'),
            'product_desc' => $request->input('product_desc'),
            'product_description' => $request->input('product_description'),
            'product_color' => $request->input('product_color'),
            'product_price' => $request->input('product_price'),
            'product_img' => $src,
            'product_offer_img' => $src1,
            'product_status' => $product_status,
            'cat_id' => $request->input('cat_id'),
            'sub_cat_id' => $request->input('sub_cat_id'),
            'brand_id' => $request->input('brand_id'),
            'tag_id' => $request->input('tag_id'),
        ];
        if (empty($data['product_img'])){
            unset($data['product_img']);
        }
        if (empty($data['product_offer_img'])){
            unset($data['product_offer_img']);
        }
        $product = products::find($id);
        if ($product instanceof products) {
            $product->update($data);
            return redirect()->route('back.products.list')->with('msg', 'محصول به روز رسانی شد.');
        }
    }

    public function show($id)
    {
        $product = products::find($id);
        if ($product instanceof products) {
            $product->product_status = 1;
            $product->save();
        }
        return redirect()->route('back.products.list')->with('msg', 'محصول با موفقیت به نمایش درآمد');
    }

    public function hidden($id)
    {
        $product = products::find($id);
        if ($product instanceof products) {
            $product->product_status = 0;
            $product->save();
        }
        return redirect()->route('back.products.list')->with('msg', 'محصول مخفی شد');
    }

    public function delete($id)
    {
        if ($id && ctype_digit($id)) {
            $product = products::find($id);
            if ($product instanceof products) {

                if (is_file($product->product_img)) {
                    unlink($product->product_img);
                }
                $product->delete();
            }
            return redirect()->route('back.products.list')->with('msg', 'محصول با موفقیت حذف شد');
        }
    }


}
