<?php

namespace App\Model;

use App\Model\BaseModel;

class FoodModel extends BaseModel
{
    public $table = 'food';

    public function create($data)
    {
        //them du lieu vao table food
        $sql = "insert into $this->table (name,image) values (?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['image']);
        $stmt->execute();

        //lay id cua mon an hien tai
        $sql3 = "select id from food order by id desc limit 1";
        $stmt3 = $this->connect->query($sql3);
        $e = $stmt3->fetch(\PDO::FETCH_OBJ);

        //them du lieu vao food_detail
        $sql2 = "INSERT INTO food_detail (name, description, price, food_id) values (?,?,?,?)";
        $stmt2 = $this->connect->prepare($sql2);
        $stmt2->bindParam(1, $data["name"]);
        $stmt2->bindParam(2, $data["description"]);
        $stmt2->bindParam(3, $data["price"]);
        $stmt2->bindParam(4, $e->id);
        $stmt2->execute();


    }

    public function update($data,$id)
    {
        $sql="update $this->table set name =?,image=? where id=$id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data['name']);
        $stmt->bindParam(2,$data['image']);
        $stmt->execute();
    }

    public function deleteFoodById($id)
    {
        $sql = "delete food, fd from food join food_detail fd on food.id = fd.food_id where fd.id =$id";
        $this->connect->query($sql);
    }
}
