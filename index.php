<?php
require "vendor/autoload.php";
session_start();

use App\Controller\FoodController;
use App\Controller\AuthController;
use App\Controller\UserController;

$authController = new AuthController();
$foodcontroller = new FoodController();
$userController = new UserController();
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style/signup.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>


<?php
switch ($page) {
    //view cua restaurant
    case "food-list":
        $foodcontroller->getAll($_GET['id']);
        break;
    case 'food-detail':
        $foodcontroller->getFoodByID($_GET['id']);
        break;
    case "food-create":
        $foodcontroller->create($_POST, $_GET['id']);
        break;
    case "food-update":
        $foodcontroller->update($_POST, $_REQUEST['id']);
        break;
    case "food-delete":
        $foodcontroller->delete($_REQUEST['id']);
        break;


    //View cua customer
    case "restaurant-list":
        $userController->getAllRestaurant();
        break;
    case "restaurant-detail":
        $userController->getDetailRestaurant($_GET['id']);
        break;

    //dang nhap & dang ky
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
    case 'signup':
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $authController->showFormSignUp();
        } else {
            $authController->signup($_REQUEST);
        }
        break;
    default:
        header("location:index.php?page=login");
}
?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>
