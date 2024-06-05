<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'customer_id' => $this->customer_id,
            'order_date' => $this->order_date,
            'total_price' => $this->total_price,
            'payment_method' => $this->payment_method,
            'order_status' => $this->order_status,
            'order_details' => $this->orderDetails, 
        ];
    }
}
