<?php

namespace App\Http\Requests\Article;

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
            'title' => 'required',
            'lead' => 'required',
            'content' => 'required',
            'author' => 'nullable',

            'preview_admin' => 'nullable|file',
            'img_first_admin' => 'nullable|file',
            'img_second_admin' => 'nullable|file',
            'img_third_admin' => 'nullable|file',
            'img_fourth_admin' => 'nullable|file',
            'img_fifth_admin' => 'nullable|file',
        ];
    }
}
