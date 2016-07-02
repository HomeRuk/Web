<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FoodRequset extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
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
            'name' => 'required',
            'price' => 'required|integer',
            'image' => 'memes:png,jpg,jpeg,bmp',
            'typefood_id' => 'required',
        ];
    }
    
    public function messages() {
        return [
            'name.required' => 'กรุณากรอกชื่อเมนูอาหาร',
            'price.required' => 'กรุณากรอกราคา',
            'price.integer' => 'กรุณากรอกราคาเป็นตัวเลข',
            'image.memes' => 'กรุณาเลือกรูปภาพนามสกุล png, jpg',
            'typefood_id.required' => 'กรุณาเลือกประเภทอาหาร',
        ];
    }
}
