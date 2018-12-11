<?php

namespace App\Http\Controllers\frontend;

use App\models\favorites;
use App\models\siteInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class favoritesController extends Controller
{
    //
    public function list()
    {
        $siteinfo=siteInfo::all()->first();
        if(Auth::user()){
            $products=Auth::user()->favorites()->get();

        }
        return view('frontend.items.favorites.list',compact('siteinfo','products'));
    }

    public function add($cus_id,$pro_id)
    {
        if(ctype_digit($cus_id)&&ctype_digit($pro_id)){
            $data=[
                'customer_id'  => $cus_id,
                'product_id'  => $pro_id,
            ];
            favorites::updateOrCreate($data);
        }
        return redirect()->back();
    }

    public function delete($cus_id,$pro_id)
    {
        $favorite=favorites::where(['customer_id'=>$cus_id,'product_id'=>$pro_id])->first();
        if ($favorite instanceof favorites ) {
            $favorite->delete();
        }
        return redirect()->back();
    }
}
