<?php 

// src/Repositories/UserRepository.php
namespace Aslan\SolidPackage\Repositories;

use App\Models\User; // Pastikan Anda menggunakan model yang sesuai

class UserRepository implements UserRepositoryInterface
{
    public function getAll()
    {
        return User::all();
    }

    public function create(array $data)
    {
        return User::create($data);
    }
}
