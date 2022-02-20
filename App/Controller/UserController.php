<?php

namespace App\Controller;

use App\Model\CustomerModel;
use App\Model\FoodModel;
use App\Model\UserModel;

class UserController
{
    public $customerModel;
    public $foodModel;

    public function __construct()
    {
        $this->customerModel = new CustomerModel();
        $this->foodModel = new FoodModel();
    }

    public function getAllRestaurant()
    {
       $restaurants = $this->foodModel->getAllRestaurant();
        include "App/View/Food-Customer/cm-food-list.php";
    }

//
//    public function createUser($request)
//    {
//        if($_SERVER["REQUEST_METHOD"]== "GET"){
//            include_once "App/View/Food-Customer/cm-food-create.php";
//        }else{
//            $this->foodModel->create($request);
//            header("location:index.php?page=cm-food-list");
//        }
//    }
}