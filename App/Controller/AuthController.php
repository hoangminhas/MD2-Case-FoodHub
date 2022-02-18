<?php

namespace App\Controller;

use App\Model\UserModel;

class AuthController
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login($request)
    {
        if ($this->userModel->checkLogin($request["email"], $request["password"])) {
            $_SESSION["user"] = $this->userModel->getByEmail($request["email"]);
            header("location:index.php?page=food-list");
        } else {
            header("location:index.php?page=login");
        }
    }
}