<?php

namespace App\Interface\Service;

interface ProductServiceInterface
{
    public function getAllProducts();

    public function getProductById(int $id);

    public function createProduct(object $data);

    public function updateProduct(object $data, int $id);

    public function deleteProduct(int $id);
}
