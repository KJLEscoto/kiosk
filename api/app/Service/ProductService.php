<?php

namespace App\Service;

use App\Http\Resources\ProductResource;
use App\Interface\Repository\ProductRepositoryInterface;
use App\Interface\Service\ProductServiceInterface;

class ProductService implements ProductServiceInterface
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllProducts()
    {
        return $this->productRepository->getAll();
    }

    public function getProductById(int $id)
    {
        $product = $this->productRepository->getById($id);

        return new ProductResource($product);
    }

    public function createProduct(object $data)
    {
        $product = $this->productRepository->create($data);

        return new ProductResource($product);
    }

    public function updateProduct(object $data, int $id)
    {
        $product = $this->productRepository->update($data, $id);

        return new ProductResource($product);
    }

    public function deleteProduct(int $id)
    {
        return $this->productRepository->delete($id);
    }
}
