<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'article' => 'string|required|unique:products,article',
            'name' => 'string|required',
            'type' => 'string|required',
            'gender' => 'string|required',
            'price' => 'required|decimal:2',
            'season' => 'string|required',

            'XS' => 'integer|nullable',
            'S' => 'integer|nullable',
            'M' => 'integer|nullable',
            'L' => 'integer|nullable',
            'XL' => 'integer|nullable',

            'main_img' => 'required|file',
            'second_img' => 'nullable|file',
            'third_img' => 'nullable|file',
            'fourth_img' => 'nullable|file',
            'model_img' => 'required|file',

            'cotton' => 'integer|nullable',
            'viscose' => 'integer|nullable',
            'elastane' => 'integer|nullable',
            'wool' => 'integer|nullable',
            'polyester' => 'integer|nullable',
        ];
    }
}
