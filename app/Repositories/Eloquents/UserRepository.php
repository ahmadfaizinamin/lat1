<?php
namespace App\Repositories\Eloquents;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterfaces;

class UserRepository implements UserRepositoryInterfaces
{
    public function create(array $data)
    {
        return User::create($data);
    }
}