<?php
require_once("./config.php");
$url = $_GET['clt'] ?? "";

switch ($url) {
    case "/":
        require_once FRONTEND . "Home.php";
        break;
    case "":
        require_once FRONTEND . "Home.php";
        break;
    case "category":
        require_once FRONTEND . "category.php";
        break;
    case "header":
        require_once "./Frontend/component/client/footer.php";
        break;
    default:
        echo "Page not found!";
        break;
}