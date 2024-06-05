<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderDetailStoreRequest;
use App\Http\Requests\OrderDetailUpdateRequest;
use App\Interface\Service\OrderDetailServiceInterface;
use Illuminate\Http\JsonResponse;


class OrderDetailController extends Controller
{
    private $orderDetailService;

    public function __construct(OrderDetailServiceInterface $orderDetailService)
    {
        $this->orderDetailService = $orderDetailService;
    }

    public function index()
    {
        return $this->orderDetailService->getAllOrderDetails();
    }

    public function store(OrderDetailStoreRequest $request)
    {
        return $this->orderDetailService->createOrderDetail($request);
    }

    public function show(int $id)
    {
        return $this->orderDetailService->getOrderDetailById($id);
    }

    public function update(OrderDetailUpdateRequest $request, int $id)
    {
        return $this->orderDetailService->updateOrderDetail($request, $id);
    }

    public function destroy(int $id)
    {
        return $this->orderDetailService->deleteOrderDetail($id);
    }
}
