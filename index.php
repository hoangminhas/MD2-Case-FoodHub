<?php

use App\Controller\FoodController;

require "vendor/autoload.php";
$foodcontroller = new FoodController();
$page = $_GET['page'] ?? "";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=food-list">FoodList</a>
<?php
switch ($page) {
    case "food-list":
        $foodcontroller->getAll();
        break;
    case "food-create":
        $foodcontroller->c
}
?>

</body>
</html>
