<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
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
            'txtCateName' => 'required|unique:cates,name',
            'txtOrder' => 'required',
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
            'txtCateName.required' => 'Category Name is required',
            'txtCateName.unique'  => 'Category Name is exist',
            'txtOrder.required'  => 'Category Order is required',
            'txtKeywords.required'  => 'Category Keywords is required',
            'txtDescription.required'  => 'Category Description is required'
        ];
    }
}
