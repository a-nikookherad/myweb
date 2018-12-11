<?php

namespace App\Http\Controllers\frontend;

use App\models\carts;
use App\models\siteInfo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use function Sodium\increment;

class cartsController extends Controller
{
    //
    public function list()
    {
        $siteinfo=siteInfo::all()->first();
        if(Auth::user()){
            $products=Auth::user()->products()->get();

        }
        return view('frontend.items.carts.list',compact('siteinfo','products'));
    }

    public function add($cus_id,$pro_id)
    {
        if(ctype_digit($cus_id)&&ctype_digit($pro_id)){
            $data=[
                'customer_id'  => $cus_id,
                'product_id'  => $pro_id,
            ];
            carts::updateOrCreate($data);
        }
        return redirect()->route('front.carts.list');
    }

    public function up_qty($cus_id,$pro_id)
    {
        $cart=carts::where(['customer_id'=>$cus_id,'product_id'=>$pro_id])->first();
        if ($cart instanceof carts) {
            $a=$cart->product_qty+1;
            $cart->product_qty=$a;
            $cart->save();
        }
        return redirect()->back();
    }

    public function down_qty($cus_id,$pro_id)
    {
        $cart=carts::where(['customer_id'=>$cus_id,'product_id'=>$pro_id])->first();
        if ($cart instanceof carts && $cart->product_qty>0) {
                $a=$cart->product_qty-1;
                $cart->product_qty=$a;
                $cart->save();
        }
        return redirect()->back();

    }

    public function delete($cus_id,$pro_id)
    {
        $cart=carts::where(['customer_id'=>$cus_id,'product_id'=>$pro_id])->first();
        if ($cart instanceof carts ) {
            $cart->delete();
        }
        return redirect()->back();

    }
}
