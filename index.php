<?php
require_once("./config.php");
$url = $_GET['clt'] ?? "";

switch ($url) {
    case "":
        require_once FRONTEND . "Home.php";
        break;
    case "category":
        require_once FRONTEND . "category.php";
        break;
    case "cart":
        require_once FRONTEND . "cart.php";
        break;
    case "pay":
        require_once FRONTEND . "pay.php";
        break;
    case "header":
        require_once "./Frontend/component/client/header.php";
        break;
    default:
        echo "Page not found!";
        break;
}
