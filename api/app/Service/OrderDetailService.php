<?php

namespace App\Service;

use App\Http\Resources\OrderDetailResource;
use App\Interface\Repository\OrderDetailRepositoryInterface;
use App\Interface\Service\OrderDetailServiceInterface;

class OrderDetailService implements OrderDetailServiceInterface
{
    private $orderDetailRepository;

    public function __construct(OrderDetailRepositoryInterface $orderDetailRepository)
    {
        $this->orderDetailRepository = $orderDetailRepository;
    }

    public function getAllOrderDetails()
    {
        return $this->orderDetailRepository->getAll();
    }

    public function getOrderDetailById(int $id)
    {
        $orderDetail = $this->orderDetailRepository->getById($id);

        return new OrderDetailResource($orderDetail);
    }

    public function createOrderDetail(object $data)
    {
        $orderDetail = $this->orderDetailRepository->create($data);

        return new OrderDetailResource($orderDetail);
    }

    public function updateOrderDetail(object $data, int $id)
    {
        $orderDetail = $this->orderDetailRepository->update($data, $id);

        return new OrderDetailResource($orderDetail);
    }

    public function deleteOrderDetail(int $id)
    {
        return $this->orderDetailRepository->delete($id);
    }
}
