<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterfaces;

class UserRepository implements UserRepositoryInterfaces
{
    public function create(array $data)
    {
        return User::create($data);
    }
}