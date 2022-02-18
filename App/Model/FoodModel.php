<?php

namespace App\Model;

use App\Model\BaseModel;

class FoodModel extends BaseModel
{
    public $table = 'food';

    public function create($data)
    {
        $sql = "insert into $this->table (name,image) values (?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['image']);
        $stmt->excute();
    }

    public function update($data,$id)
    {
        $sql="update $this->table set name =?,image=? where id=$id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data['name']);
        $stmt->bindParam(2,$data['image']);
        Sstmt->excute();
    }
}
