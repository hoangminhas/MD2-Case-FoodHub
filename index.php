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
<a href="index.php?page=food-create">FoodCreate</a>
<?php
switch ($page) {
    case "food-list":
        $foodcontroller->getAll();
        break;
    case "food-create":
        $foodcontroller->create($_POST);
        break;
    case "food-update":
        $foodcontroller->update($_POST,$_REQUEST['id']);
        break;
    case "food-delete":
        $foodcontroller->delete($_REQUEST['id']);
        break;
}
?>

</body>
</html>
