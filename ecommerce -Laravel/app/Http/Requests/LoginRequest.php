<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'unique:offrts,name|max:100',
            'price' => 'required|numeric',
            'photo' => 'required',
            'name_en' => 'required|unique:offrts,name|max:100',
            'name_ar' => 'required',
            'details' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => __('messges.The Name is valid'),
            'name.required' => __('messges.This field is required'),
            'price.numeric' =>__('messges.The Price rquierd th number'),
            'price.required' =>__('messges.This field is required'),
            'photo.required' =>__('messges.This field is required'),
            'name_ar.required' =>__('messges.This field is required'),
            'details.required' =>__('messges.This field is required'),
        ];
    }

}
