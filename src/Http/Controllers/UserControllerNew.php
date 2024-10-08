<?php 

// src/Http/Controllers/UserController.php
namespace Aslan\SolidPackage\Http\Controllers;

use Aslan\SolidPackage\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return $this->userService->getAllUsers();
    }

    public function store(Request $request)
    {
        return $this->userService->createUser($request->all());
    }
}
