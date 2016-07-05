<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FoodRequest extends Request
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
            'price' => 'required|numeric',
            'typefood_id' => 'required',
            'image' => 'mimes:png,jpeg',
        ];
    }
    
    public function messages() {
        return [
            'name.required' => 'กรุณากรอกชื่อรายการอาหาร',
            'price.required' => 'กรุณากรอกราคา',
            'price.numeric' => 'กรุณากรอกราคาเป็นตัวเลข',
            'typefood_id.required' => 'เลือกประเภทอาหาร',
            'image.mimes' => 'เลือกรูปภาพรายการอาหารเป็น สกุล png, jpg',
        ];
    }
}
