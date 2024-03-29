<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StorePruebaRequest extends FormRequest
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
            'name' => 'required|max: 32',
            'description' => 'required|max: 65535',
            'slug' => 'required'
        ];
    }
}
