<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'article' => 'string|nullable',
            'name' => 'string|nullable',
            'type' => 'string|nullable',
            'gender' => 'string|nullable',
            'price' => 'nullable|decimal:2',
            'season' => 'string|nullable',

            'XS' => 'integer|nullable',
            'S' => 'integer|nullable',
            'M' => 'integer|nullable',
            'L' => 'integer|nullable',
            'XL' => 'integer|nullable',

            'main_img' => 'nullable',
            'second_img' => 'nullable',
            'third_img' => 'nullable',
            'fourth_img' => 'nullable',
            'model_img' => 'nullable',

            'cotton' => 'integer|nullable',
            'viscose' => 'integer|nullable',
            'elastane' => 'integer|nullable',
            'wool' => 'integer|nullable',
            'polyester' => 'integer|nullable',
        ];
    }
}
