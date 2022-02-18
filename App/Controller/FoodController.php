<?php
namespace App\Controller;
use App\Model\FoodModel;

class FoodController
{
    public $foodModel;
    public function __construct()
    {
        $this->foodModel = new FoodModel();
    }

    public function getAll()
    {
       $foods = $this->foodModel->getAll();
        include "App/View/Food-Restaurant/food-list.php";
    }
}