<?php

namespace App\Services\UserService;

use App\Models\User;

class UserService {

    /**
     * Find a user by ID or fail
     * @param int $id
     * @return User|null
     */
    public function findOrFail(int $id): ?User
    {
        return User::findOrFail($id);
    }
}