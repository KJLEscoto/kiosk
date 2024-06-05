<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'customer_id' => 'nullable|exists:customers,id',
            'order_date' => 'sometimes|required|date',
            'total_price' => 'sometimes|required|numeric|min:0',
            'payment_method' => 'sometimes|required|string',
            'order_status' => 'sometimes|required|in:pending,processing,completed',
        ];
    }
}
