<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class catReq extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cat_name'  => 'required|string',
            'cat_desc'  => 'required|max:50',
        ];
    }

    public function messages()
    {
        return[
            'cat_name.required'  => 'لطفا نام دسته بندی را وارد کنید',
            'cat_name.string'  => 'نام دسته بندی نباید عدد باشد',
            'cat_desc.max'  => 'توضیحات دسته بندی نباید بیش از 50 کاراکتر باشد',
            'cat_desc.required'  => 'توضیحات دسته بندی نباید خالی باشد',
        ];
    }
}
