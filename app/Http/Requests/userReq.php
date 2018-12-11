<?php

namespace App\Http\Requests;

use http\Env\Request;
use http\Url;
use Illuminate\Foundation\Http\FormRequest;

class userReq extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        if(request()->route('id')){
            $data=[
                //|unique:users
                'name' => 'required|string',
                'email' => 'required|email',
            ];
        }else{
            $data=[
                'name' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:3',
            ];
        }
        return $data;
    }

    public function messages()
    {
        return [
            'name.required'     =>  'لطفا نام را وارد کنید.',
            'name.string'       =>  'نام باید شامل کاراکتر باشد!',
            'email.required'    =>  'ایمیل را وارد کنید',
            'email.unique'    =>  'این کاربر قبلا در سیستم ثبت شده است.',
            'email.email'       =>  'فرمت ایمیل صحیح نیست',
            'password.required' =>  'پسوورد لازم است',
            'password.min'      =>  'پسوورد کمتر از 3 کاراکتر نباید باشد.',
        ];
    }
}
