<?php

namespace App\Service;

use App\Http\Resources\AuthResource;
use App\Http\Resources\UserResource;
use App\Interface\Repository\UserRepositoryInterface;
use App\Interface\Service\AuthenticationServiceInterface;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthenticationService implements AuthenticationServiceInterface
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function authenticate(object $payload)
    {
        $user = $this->userRepository->findByEmail($payload->email);

        if (!$user) {
            return response()->json([
                'error' => 'No account found'
            ], Response::HTTP_UNAUTHORIZED);
        }

        if (!Hash::check($payload->password, $user->password)) {
            return response()->json([
                'error' => 'Invalid Credentials'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $token = $user->createToken('auth-token')->plainTextToken;

        $data = (object) [
            'token' => $token,
            'user' => new UserResource($user)
        ];

        return new AuthResource($data);
    }

    public function unauthenticate(object $payload)
    {
        $payload->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Successfully Logged out'
        ], Response::HTTP_OK);
    }
}
