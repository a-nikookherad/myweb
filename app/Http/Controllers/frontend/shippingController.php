<?php

namespace App\Http\Controllers\frontend;

use App\models\shipping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class shippingController extends Controller
{
    //

    public function list()
    {
        $shippings=shipping::all();
        return view('backend.items.shipping.list',compact('shippings'));
    }
    public function add(Request $request)
    {
        $this->validate($request,[
           'customer_name' => 'required',
           'customer_addr' => 'required',
           'customer_phone' => 'required',
           'customer_email' => 'required',
           'postal_code' => 'required',
        ],[
            'customer_name.required'  =>  'ورود نام الزامی است',
            'customer_addr.required'  =>  'ورود آدرس الزامی است',
            'customer_phone.required'  =>  'ورود شماره تلفن الزامی است',
            'customer_email.required'  =>  'ورود ایمیل الزامی است',
            'postal_code.required'  =>  'ورود کدپستی الزامی است',
        ]);
        $customer_id=Auth::user()->id;
        $data=[
            'customer_id'  => $customer_id,
            'customer_name'  => $request->input('customer_name'),
            'customer_addr'  => $request->input('customer_addr'),
            'customer_phone'  => $request->input('customer_phone'),
            'customer_email'  => $request->input('customer_email'),
            'postal_code'  => $request->input('postal_code'),
        ];
        shipping::updateOrCreate($data);
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $customer_id=Auth::user()->id;
        $data=[
            'customer_id'  => $customer_id,
            'customer_name'  => $request->input('customer_name'),
            'customer_addr'  => $request->input('customer_addr'),
            'customer_phone'  => $request->input('customer_phone'),
            'customer_email'  => $request->input('customer_email'),
            'postal_code'  => $request->input('postal_code'),
        ];
        $ship=shipping::where('customer_id',$customer_id)->get()->first();
        dd($ship);
        $ship->update($data);
    }
}
