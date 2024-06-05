<?php

namespace App\Repository;

use App\Interface\Repository\ProductRepositoryInterface;
use App\Models\Product;
use Illuminate\Http\Response;

class ProductRepository implements ProductRepositoryInterface
{
    public function getAll()
    {
        return Product::paginate(20);
    }

    public function getById(int $id)
    {
        return Product::findOrFail($id);
    }

    public function create(object $data)
    {
        $product = new Product();
        $product->name = $data->name;
        $product->description = $data->description;
        $product->price = $data->price;
        $product->quantity = $data->quantity;
        $product->save();

        return $product->fresh();
    }

    public function update(object $data, int $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $data->name;
        $product->description = $data->description;
        $product->price = $data->price;
        $product->quantity = $data->quantity;
        $product->save();

        return $product->fresh();
    }

    public function delete(int $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json([
            'message' => 'Success'
        ], Response::HTTP_OK);
    }
}
