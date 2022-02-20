<?php
namespace App\Controller;

use App\Model\FoodModel;
use App\Model\UserModel;

class UserController
{
    public $foodModel;
    public $userModel;

    public function __construct()
    {
        $this->foodModel = new FoodModel();
        $this->userModel = new UserModel();
    }

    public function getAllRestaurant()
    {
       $restaurants = $this->userModel->getAllRestaurant();
        include "App/View/Food-Customer/restaurant-list.php";
    }

    public function getDetailRestaurant($id)
    {
        $thisRestaurant = $this->userModel->getDetailRestaurant($id);
        include "App/View/Food-Customer/restaurant-detail.php";
    }

}