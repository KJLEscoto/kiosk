<?php

namespace App\Repository;

use App\Interface\Repository\OrderRepositoryInterface;
use App\Models\Order;
use Illuminate\Http\Response;

class OrderRepository implements OrderRepositoryInterface
{
    public function getAll()
    {
        return Order::paginate(20);
    }

    public function getById(int $id)
    {
        return Order::findOrFail($id);
    }

    public function create(object $data)
    {
        $order = new Order();
        $order->customer_id = $data->customer_id;
        $order->order_date = $data->order_date;
        $order->total_price = $data->total_price;
        $order->payment_method = $data->payment_method;
        $order->order_status = $data->order_status;
        $order->save();

        return $order->fresh();
    }

    public function update(object $data, int $id)
    {
        $order = Order::findOrFail($id);
        $order->customer_id = $data->customer_id;
        $order->order_date = $data->order_date;
        $order->total_price = $data->total_price;
        $order->payment_method = $data->payment_method;
        $order->order_status = $data->order_status;
        $order->save();

        return $order->fresh();
    }

    public function delete(int $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json([
            'message' => 'Success'
        ], Response::HTTP_OK);
    }
}
