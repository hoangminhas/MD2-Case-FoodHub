<?php
session_start();

use App\Controller\FoodController;
use App\Controller\AuthController;

require "vendor/autoload.php";

$authController = new AuthController();
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
<<<<<<< HEAD
<!--<a href="index.php?page=food-list">FoodList</a>-->
=======
<a href="index.php?page=food-list">FoodList</a>
<a href="index.php?page=food-create">FoodCreate</a>
>>>>>>> e4aaaf461cc81ab3c591f94fb04a6297d375658f
<?php
switch ($page) {
    case "food-list":
        $foodcontroller->getAll();
        break;
<<<<<<< HEAD
    case "login":
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $authController->showFormLogin();
        } else {
            $authController->login($_REQUEST);
        }
        break;
    case 'logout':
        $authController->logout();
        break;
    default:
        header("location:index.php?page=login");
=======
    case "food-create":
        $foodcontroller->create($_POST);
        break;
    case "food-update":
        $foodcontroller->update($_POST,$_REQUEST['id']);
        break;
    case "food-delete":
        $foodcontroller->delete($_REQUEST['id']);
        break;
>>>>>>> e4aaaf461cc81ab3c591f94fb04a6297d375658f
}
?>

</body>
</html>
