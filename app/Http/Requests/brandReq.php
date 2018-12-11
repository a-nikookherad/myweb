<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class brandReq extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'brand_name'  => 'required|string',
            'brand_desc'  => 'required|max:50',
        ];
    }

    public function messages()
    {
        return[
            'brand_name.required'  => 'لطفا نام برند را وارد کنید',
            'brand_name.string'  => 'نام نام برند نباید عدد باشد',
            'brand_desc.max'  => 'توضیحات برند نباید بیش از 50 کاراکتر باشد',
            'brand_desc.required'  => 'توضیحات برند نباید خالی باشد',
        ];
    }
}
