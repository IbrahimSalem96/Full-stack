<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainCategoryRequest extends FormRequest
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
            'photo' => 'required_without:id|mimes:jpg,png,jpeg', // The field is required and compulsory, except for the form that contains the Enter id fields
            'category' => 'required|array|min:1',
            'category.*.name' => 'required',
            'category.*.abbr' => 'required',
            'category.*.active' => 'required_without:id',
        ];
    }
}
