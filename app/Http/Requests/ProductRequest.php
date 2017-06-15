<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'sltParent' => 'required',
            'txtName' => 'required|unique:products,name',
            'txtPrice' => 'required',
            'txtIntro' => 'required',
            'txtContent' => 'required',
            'fImage' => 'required|image',
            'txtKeywords' => 'required',
            'txtDescription' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'sltParent.required' => 'Please Choose Category',
            'txtName.required' => 'Product Name is required',
            'txtName.unique' => 'Product Name is exist',
            'txtPrice.required' => 'Price is required',
            'txtIntro.required' => 'Intro is required',
            'txtContent.required' => 'Content is required',
            'fImage.required' => 'Please Choose Images',
            'fImage.image' => 'This file is not Images',
            'txtKeywords.required' => 'Keywords is required',
            'txtDescription.required' => 'Description is required'
        ];
    }
}
