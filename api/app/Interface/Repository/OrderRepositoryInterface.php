<?php

namespace App\Interface\Repository;

interface OrderRepositoryInterface
{
    public function getAll();

    public function getById(int $id);

    public function create(object $data);

    public function update(object $data, int $id);

    public function delete(int $id);
}
