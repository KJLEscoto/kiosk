<?php

namespace App\Interface\Service;

interface OrderDetailServiceInterface
{
    public function getAllOrderDetails();

    public function getOrderDetailById(int $id);

    public function createOrderDetail(object $data);

    public function updateOrderDetail(object $data, int $id);

    public function deleteOrderDetail(int $id);
}
