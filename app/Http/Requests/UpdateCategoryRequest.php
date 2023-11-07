<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'The category name must be a string.',
            'name.max' => 'The category name may not be greater than :max characters.',
            'parent_id.exists' => 'The selected parent category is invalid.',
        ];
    }
}
