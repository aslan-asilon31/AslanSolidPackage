<?php 

// src/Repositories/UserCreationInterface.php
namespace Aslan\SolidPackage\Repositories;

interface UserCreationInterface
{
    public function create(array $data);
}

// src/Repositories/UserRetrievalInterface.php
namespace Aslan\SolidPackage\Repositories;

interface UserRetrievalInterface
{
    public function getAll();
}
