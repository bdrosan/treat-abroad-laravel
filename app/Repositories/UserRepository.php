<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{

    /**
     * @return void
     * @desc creates a new User
     */
    public function createUser(array $data): User
    {
        return User::create($data);
    }

    /**
     * @param int $userId
     * @return void
     */
    public function deleteUser(int $userId): void
    {
        User::destroy($userId);
    }
}