<?php

namespace App\Http\Requests\Article;

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
            'title' => 'string|nullable',
            'lead' => 'string|nullable',
            'content' => 'string|nullable',
            'author' => 'string|nullable',

            'preview' => 'nullable|file',
            'img_first' => 'nullable|file',
            'img_second' => 'nullable|file',
            'img_third' => 'nullable|file',
            'img_fourth' => 'nullable|file',
            'img_fifth' => 'nullable|file',
        ];
    }
}
