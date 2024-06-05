<?php

namespace App\Interface\Service;

interface OrderServiceInterface
{
    public function getAllOrders();

    public function getOrderById(int $id);

    public function createOrder(object $data);

    public function updateOrder(object $data, int $id);

    public function deleteOrder(int $id);
}
