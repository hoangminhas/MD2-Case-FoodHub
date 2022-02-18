<?php

namespace App\Model;

use PDO;

class UserModel extends BaseModel
{
    public $table = 'users';

    public function checkLogin($email, $password): bool
    {
        $sql = "SELECT * FROM $this->table WHERE email=? and password=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    public function getByEmail($email)
    {
        $sql = "SELECT * FROM $this->table WHERE emai=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function checkRole()
    {
        
    }
}