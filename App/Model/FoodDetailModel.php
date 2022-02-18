<?php

namespace App\Model;

class FoodDetailModel extends BaseModel
{
    public $table = "food_detail";


//    public function create($data)
//    {
//        $sql = "insert into $this->table(name,description,price) values (?,?,?)";
//        $stmt = $this->connect->prepare($sql);
//        $stmt->bindParam(1,$data['name']);
//        $stmt->bindParam(2,$data['description']);
//        $stmt->bindParam(3,$data['price']);
//        $stmt->execute();
//    }
}