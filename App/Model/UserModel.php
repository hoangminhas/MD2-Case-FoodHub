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
        $sql = "SELECT * FROM $this->table WHERE email=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // check role cua user
    public function checkRole($id)
    {
        $sql = "select users.id ,users.email, role.name from users join role on users.role_id = role.id where users.id=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function checkSignUp($email): bool
    {
        $sql = "SELECT * from $this->table where email = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }




    public function addUser($request)
    {
        $sql = "INSERT INTO users(name, phone, email, password, role_id) values (?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $request['name']);
        $stmt->bindParam(2, $request['phone']);
        $stmt->bindParam(3, $request['email']);
        $stmt->bindParam(4, $request['password']);
        $stmt->bindParam(5, $request['role']);
        $stmt->execute();





    }
}