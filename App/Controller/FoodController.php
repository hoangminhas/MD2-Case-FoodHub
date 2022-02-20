<?php
namespace App\Controller;
use App\Model\FoodModel;
session_start();
class FoodController
{
    public $foodModel;

    public function __construct()
    {
        $this->foodModel = new FoodModel();
    }

    public function getAll($id)
    {
        $foods = $this->foodModel->getAllFoodById($id);
        include "App/View/Food-Restaurant/food-list.php";
    }
    public function delete($id){
        $userID = $_SESSION['user']->id;
//        echo "<pre>";
//        var_dump($userID);
//        die();
        $this->foodModel->deleteFoodById($id);
        header("location:index.php?page=food-list&id=$userID");
    }

    public function getFoodByID($id)
    {
        $thisFood = $this->foodModel->getFoodById($id);
        include "App/View/Food-Restaurant/food-detail.php";
    }

    public function create($request, $id){
        $userID = $_SESSION['user']->id;
        if ($_SERVER['REQUEST_METHOD']=="GET"){
            include "App/View/Food-Restaurant/food-create.php";
        }else{
            $request['image'] = $this->UploadImg();
            $this->foodModel->create($request,$id);
            header("location:index.php?page=food-list&id=$userID");
        }
    }
    public function update($request,$id){
        $userID = $_SESSION['user']->id;
        if ($_SERVER['REQUEST_METHOD']=="GET"){
            $foods = $this->foodModel->getFoodById($id);
            include "App/View/Food-Restaurant/food-update.php";
        }else{
            $request['image'] = $this->UploadImg();
            $this->foodModel->update($request,$id);
            header("location:index.php?page=food-list&id=$userID");
        }
    }
    public function UploadImg($name ="default.png"){
        $target_dir = "uploads/";
        $target_file = $target_dir .time(). basename($_FILES["image"]["name"]);
        $default = $target_dir.$name;
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
           return $target_file;
        } else {
            return $default;
        }
    }

}