<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class add_product extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'product_name' => 'required',
            'product_price' => 'required',
//            'cat_id' => 'required',
//            'brand_id' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'product_name.required' => 'لطفا نام محصول را وارد کنید!',
            'product_price.required' => 'لطفا قیمت محصول را وارد کنید!',
//            'cat_id.required' => 'لطفا دسته بندی را مشخص کنید!',
//            'brand_id.required' => 'لطفا نام برند را وارد کنید!'
        ];
    }
}
