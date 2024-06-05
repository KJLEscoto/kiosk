<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Interface\Service\ProductServiceInterface;
use Illuminate\Http\JsonResponse;


class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return $this->productService->getAllProducts();
    }

    public function store(ProductStoreRequest $request)
    {
        return $this->productService->createProduct($request);
    }

    public function show(int $id)
    {
        return $this->productService->getProductById($id);
    }

    public function update(ProductUpdateRequest $request, int $id)
    {
        return $this->productService->updateProduct($request, $id);
    }

    public function destroy(int $id)
    {
        return $this->productService->deleteProduct($id);
    }
}
