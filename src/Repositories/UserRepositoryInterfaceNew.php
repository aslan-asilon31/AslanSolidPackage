<?php  

// src/Repositories/UserRepositoryInterface.php
namespace Aslan\SolidPackage\Repositories;

interface UserRepositoryInterface
{
    public function getAll();
    public function create(array $data);
}
