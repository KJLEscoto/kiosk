<?php

namespace App\Interface\Service;

interface AuthenticationServiceInterface
{
    public function authenticate(object $payload);

    public function unauthenticate(object $payload);
}
