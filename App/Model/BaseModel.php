<?php
namespace App\Model;
use App\Model\DBConnect;
use PDO;

class BaseModel
{
    public $connect;
    public $table;

    public function __construct()
    {
        $db = new DBConnect();
        $this->connect = $db->connect();
    }

    public function getAll()
    {
        $sql = "select * from $this->table";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $sql = "select * from $this->table where id=$id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function deleteById($id)
    {
        $sql = "delete from $this->table where id=$id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}