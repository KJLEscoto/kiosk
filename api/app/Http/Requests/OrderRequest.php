<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'customer_id' => 'nullable|exists:customers,id',
            'order_date' => 'required|date',
            'total_price' => 'required|numeric|min:0',
            'payment_method' => 'required|string',
            'order_status' => 'required|in:pending,processing,completed',
        ];
    }
}
