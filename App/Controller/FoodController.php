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
    public function delete($id){
        $this->foodModel->deleteFoodById($id);
        header("location:index.php?page=food-list");
    }



    public function create($request){
        if ($_SERVER['REQUEST_METHOD']=="GET"){
            include "App/View/Food-Restaurant/food-create.php";
        }else{
            $request['image'] = $this->UploadImg();
            $this->foodModel->create($request);
            header("location:index.php?page=food-list");
        }
    }
    public function update($request,$id){
        if ($_SERVER['REQUEST_METHOD']=="GET"){
            $foods = $this->foodModel->getById($id);
            include "App/View/Food-Restaurant/food-update.php";
        }else{
            $request['image'] = $this->UploadImg();
            $this->foodModel->update($request,$id);
            header("location:index.php?page=food-list");
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