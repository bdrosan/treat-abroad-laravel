<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;

/**
 * Class UserService.
 */
class UserService
{
    private UserRepository $userRepository;
    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function createUser(array $data): User
    {
        return $this->userRepository->createUser($data);
    }

    public function deleteUser(int $userId): void
    {
        $this->userRepository->deleteUser($userId);
    }

    public function suspendUser()
    {
        //
    }

    public function activateUser()
    {
        //
    }

}
