<?php

namespace App\Model;

use App\Model\BaseModel;

class FoodModel extends BaseModel
{
    public $table = 'food';


    public function getAll()
    {
        $sql = "select * from  food_detail fd join food on fd.food_id = food.id where fd.id=id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
    public function create($data)
    {
        $sql = "insert into $this->table (name,image,price,description) values (?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['image']);
        $stmt->bindParam(3, $data['price']);
        $stmt->bindParam(4, $data['description']);
        $stmt->execute();
    }

    public function update($data,$id)
    {
        $sql="update $this->table set name =?,image=? where id=$id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data['name']);
        $stmt->bindParam(2,$data['image']);
        $stmt->execute();
    }

}
