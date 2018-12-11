<?php

namespace App\Http\Controllers\frontend;

use App\Http\Requests\custReq;
use App\models\brands;
use App\models\categories;
use App\models\customers;
use App\models\siteInfo;
use App\models\sliders;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class customersController extends Controller
{

    public function sign_in()
    {
        $siteinfo=siteInfo::all()->first();
        return view('frontend.items.customers.login',compact('sliders','categories','siteinfo'));
    }

    public function sign_in_post(Request $request)
    {
        $member=$request->has('member');
        if (Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password'),'role'=>'customers'],$member)){
            return redirect()->route('home')->with('msg','به سایت فروشگاهی خوش آمدید');
        }else{
            return redirect()->back()->with('errorMsg','نام کاربری یا گذرواژه اشتباه است');
        }
    }

    public function sign_up()
    {
        return view('frontend.items.customers.login',compact('sliders','categories','brands'));
    }

    public function sign_up_post(custReq $request)
    {
        $data=[
            'name'  => $request->input('name'),
            'email'  => $request->input('email'),
            'password'  =>Hash::make($request->input('password')) ,
            'role'  => 'customers',
            'active'  => '1',
        ];
        if (User::create($data)) {
            Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]);
            return redirect()->back()->with('msg','ثبت نام شما با موفقیت انجام شد');
        }else{
            return redirect()->back()->with('errorMsg','متاسفانه سرور قادر به ثبت نام نیست!');
        }

    }

    public function log_out()
    {
        Auth::logout();
        return redirect()->back();
    }
}
