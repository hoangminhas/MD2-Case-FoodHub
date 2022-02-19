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
            $role = $this->userModel->checkRole($_SESSION['user']->id);
            if ($role->name == "restaurant") {
                header("location:index.php?page=food-list");
            } elseif ($role->name == "customer") {
                header("location:index.php?page=cm-food-list");
            }
        } else {
            header("location:index.php?page=login");
        }
    }

    public function signup($request)
    {
        include "App/View/auth/signup.php";
        if (!$this->userModel->checkSignUp($request["email"])) {
            $this->userModel->addUser($request);
            echo "Dang ky thanh cong";
            echo "<br>";
            echo "<a href='index.php?page=login'>Login</a>";
        } else {
            echo "Email da duoc su dung";
        }
    }

    public function showFormSignUp()
    {
        include "App/View/auth/signup.php";
    }

    public function showFormLogin()
    {
        if (isset($_SESSION["user"])) {
            if ($_SESSION["user"]->id->name == "restaurant") {
                header("location:index.php?page=food-list");
            }
        }
        include "App/View/auth/login.php";
    }

    public function logout()
    {
        unset($_SESSION['user']);
        header("location:index.php?page=login");
    }

}