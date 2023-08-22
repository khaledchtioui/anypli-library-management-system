<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {

        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string|min:25',
            'year' => 'required|integer|min:0',
            'availability' => 'boolean',
            'type' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',

            //
        ];
    }
}
