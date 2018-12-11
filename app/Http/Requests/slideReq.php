<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class slideReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'slide_title' => 'required',
            'slide_desc' => 'required|min:20|max:250',
//            'slide_img' => 'required',
//            'cat_id' => 'required',
//            'brand_id' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'slide_title.required' => 'لطفا عنوان اسلاید را مشخص کنید!',
            'slide_desc.required' => 'لطفا توضیح اسلاید را وارد کنید!',
//            'slide_img.required' => 'لطفا عکس اسلاید را وارد کنید!',
            'slide_desc.min' => ' توضیح اسلاید نمیتواند کمتر از 20 کاراکتر باشد!',
//            'cat_id.required' => 'لطفا دسته بندی را مشخص کنید!',
//            'brand_id.required' => 'لطفا نام برند را وارد کنید!'
        ];
    }
}
