<?php

namespace App\Service;

use App\Http\Resources\OrderResource;
use App\Interface\Repository\OrderRepositoryInterface;
use App\Interface\Service\OrderServiceInterface;

class OrderService implements OrderServiceInterface
{
    private $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getAllOrders()
    {
        return $this->orderRepository->getAll();
    }

    public function getOrderById(int $id)
    {
        $order = $this->orderRepository->getById($id);

        return new OrderResource($order);
    }

    public function createOrder(object $data)
    {
        $order = $this->orderRepository->create($data);

        return new OrderResource($order);
    }

    public function updateOrder(object $data, int $id)
    {
        $order = $this->orderRepository->update($data, $id);

        return new OrderResource($order);
    }

    public function deleteOrder(int $id)
    {
        return $this->orderRepository->delete($id);
    }
}
