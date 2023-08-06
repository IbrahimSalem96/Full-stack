<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguageRequest extends FormRequest
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
            'name'      => 'required|string|max:100',
            'name'      => 'required|string|max:100',
            'abbr'      => 'required|string|max:10',
            #'active'    => 'required|in:0,1',
            'direction' => 'required|in:ltr,rtl',
        ];
    }

    public function messages()
    {
        return [

            #'unique'       => 'The Name is valid',
            'required'     => 'This field is required',
            'in'           => 'The entered value is not valid',
            'name.string'  => 'Language name must be letters',
            'abbr.string'  => 'Abbreviation name must be letters',
            'name.max'     => 'The number of letters is large',
            'abbr.max'     => 'The number of characters does not exceed 10',
        ];
    }

}
