<?php

use App\Services\UserService;

class UserServiceController
{
    public function __construct(private UserService $userService)
    {
    }

    public function getUser() {
        $service = new UserService();
        echo $service->getUser();
    }
}