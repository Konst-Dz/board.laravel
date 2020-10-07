<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAd extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:50',
            'description' => 'max:500|nullable',
            'price' => 'integer|max:1000000000|nullable',
            'category' => 'required',
            'phone' => 'nullable|regex:#^[\d-]{3,8}$#',/*((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}*/
            'image' => 'mimes:jpg,jpeg|nullable|max:1024'

        ];
    }
}
