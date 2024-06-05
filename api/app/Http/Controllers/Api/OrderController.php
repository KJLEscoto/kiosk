<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderStoreRequest;
use App\Http\Requests\OrderUpdateRequest;
use App\Interface\Service\OrderServiceInterface;
use Illuminate\Http\JsonResponse;


class OrderController extends Controller
{
    private $orderService;

    public function __construct(OrderServiceInterface $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        return $this->orderService->getAllOrders();
    }

    public function store(OrderStoreRequest $request)
    {
        return $this->orderService->createOrder($request);
    }

    public function show(int $id)
    {
        return $this->orderService->getOrderById($id);
    }

    public function update(OrderUpdateRequest $request, int $id)
    {
        return $this->orderService->updateOrder($request, $id);
    }

    public function destroy(int $id)
    {
        return $this->orderService->deleteOrder($id);
    }
}
