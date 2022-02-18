<?php

namespace App\Controller;
use App\Model\FoodDetailModel;
class FoodDetailController
{
    public $foodDetailModel;

    public function __construct()
    {
        $this->foodDetailModel = new FoodDetailModel();
    }

    public function showAll()
    {
        $foodDetails = $this->foodDetailModel->getAll();
        include_once "App/View/FoodDetail/list.php";
    }
}