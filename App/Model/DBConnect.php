<?php

namespace App\Model;
use PDO;
use PDOException;

class DBConnect
{
    public $dsn;
    public $username;
    public $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=foodhub;charset=utf8";
        $this->username = "root";
<<<<<<< HEAD
        $this->password = "root";
=======
        $this->password = "";
>>>>>>> e4aaaf461cc81ab3c591f94fb04a6297d375658f
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}