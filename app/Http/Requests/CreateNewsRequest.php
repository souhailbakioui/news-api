<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titre' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'date_debut' => 'required|date',
            'date_expiration' => 'required|date|after:date_debut',
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'The titre is required.',
            'titre.string' => 'The titre must be a string.',
            'titre.max' => 'The titre may not be greater than :max characters.',
            'content.required' => 'The content is required.',
            'content.string' => 'The content must be a string.',
            'category_id.required' => 'The category is required.',
            'category_id.exists' => 'The selected category is invalid.',
            'date_debut.required' => 'The start date is required.',
            'date_debut.date' => 'The start date must be a valid date.',
            'date_expiration.required' => 'The expiration date is required.',
            'date_expiration.date' => 'The expiration date must be a valid date.',
            'date_expiration.after' => 'The expiration date must be after the start date.',
        ];
    }
}
