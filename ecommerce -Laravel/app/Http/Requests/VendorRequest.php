<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
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
            'logo' => 'required|mimes:jpg,jpeg,png',
            'name' => 'required|string|max:100',
            'mobile' =>'required|max:100|unique:vendors,mobile,'.$this->id, //$this->id ==> It means that it is not unique, but in the case of modification to the same email, allow the modification other than this, make it forbidden
            'email'  => 'required|email|unique:vendors,email,'.$this->id, //$this->id ==> It means that it is not unique, but in the case of modification to the same email, allow the modification other than this, make it forbidden
            'category_id'  => 'required|exists:main_catgories,id',
            'address'   => 'required|string|max:500',
            'password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'This field is required',
            'max'  => 'This field is long',
            'category_id.exists'  => 'Section not found',
            'email.email' => 'The email format is incorrect',
            'address.string' => 'The address must be letters or letters and numbers',
            'name.string'  =>'The name must be letters or letters and numbers',
            'logo.required_without'  => 'Photo is required',
            'email.unique' => 'Email already in use',
            'mobile.unique' => 'The phone number is already in use',
        ];
    }

}
