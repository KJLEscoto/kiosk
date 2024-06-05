<?php

namespace App\Interface\Repository;

interface UserRepositoryInterface
{
    public function findByEmail(string $email);
}
