<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function store(UserStoreRequest $request) {

        $data = $request->validated();
        $user = $userService->createUser($data);

        return response()->json($user, 201);
    }
}
