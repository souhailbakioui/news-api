<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titre' => 'string|max:255',
            'content' => 'string',
            'category_id' => 'exists:categories,id',
            'date_debut' => 'date',
            'date_expiration' => 'date|after:date_debut',
        ];
    }

    public function messages()
    {
        return [
            'titre.string' => 'The titre must be a string.',
            'titre.max' => 'The titre may not be greater than :max characters.',
            'content.string' => 'The content must be a string.',
            'category_id.exists' => 'The selected category is invalid.',
            'date_debut.date' => 'The start date must be a valid date.',
            'date_expiration.date' => 'The expiration date must be a valid date.',
            'date_expiration.after' => 'The expiration date must be after the start date.',
        ];
    }
}
