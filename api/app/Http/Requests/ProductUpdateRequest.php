<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|string',
            'description' => 'nullable|string',
            'photo' => 'nullable|string',
            'quantity' => 'sometimes|nullable|integer',
            'price' => 'sometimes|required|numeric',
        ];
    }

}
