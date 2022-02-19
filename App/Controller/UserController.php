<?php

namespace App\Controller;

use App\Model\UserModel;

class UserController
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function getAllRestaurant()
    {
        $this->userModel->getAll();
        include "App/View/Food-Customer/cm-food-list.php";
    }
}