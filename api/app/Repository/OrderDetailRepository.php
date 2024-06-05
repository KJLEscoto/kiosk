<?php

namespace App\Repository;

use App\Interface\Repository\OrderDetailRepositoryInterface;
use App\Models\OrderDetail;
use Illuminate\Http\Response;

class OrderDetailRepository implements OrderDetailRepositoryInterface
{
    public function getAll()
    {
        return OrderDetail::paginate(20);
    }

    public function getById(int $id)
    {
        return OrderDetail::findOrFail($id);
    }

    public function create(object $data)
    {
        $order_detail = new OrderDetail();
        $order_detail->order_id = $data->order_id;
        $order_detail->product_id = $data->product_id;
        $order_detail->quantity = $data->quantity;
        $order_detail->unit_price = $data->unit_price;
        $order_detail->subtotal = $data->subtotal;
        $order_detail->save();

        return $order_detail->fresh();
    }

    public function update(object $data, int $id)
    {
        $order_detail = OrderDetail::findOrFail($id);
        $order_detail->order_id = $data->order_id;
        $order_detail->product_id = $data->product_id;
        $order_detail->quantity = $data->quantity;
        $order_detail->unit_price = $data->unit_price;
        $order_detail->subtotal = $data->subtotal;
        $order_detail->save();

        return $order_detail->fresh();
    }

    public function delete(int $id)
    {
        $product = OrderDetail::findOrFail($id);
        $product->delete();

        return response()->json([
            'message' => 'Success'
        ], Response::HTTP_OK);
    }
}
