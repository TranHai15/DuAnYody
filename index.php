<link rel="stylesheet" href="Frontend/Css/reset.css?ver=2">
<link rel="stylesheet" href="Frontend/Css/grid.css?ver=1">
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
        // Đăng nhập đăng kí
    case "auth":
        if (isset($_GET["clt"]) && $_GET["action"] == "login") {
            require_once FRONTEND . "login.php";
        } else if (isset($_GET["clt"]) && $_GET["action"] == "register") {
            require_once FRONTEND . "register.php";
        }
        break;
    case "header":
        require_once "./Frontend/component/client/footer.php";
        break;
    default:
        echo "Page not found!";
        break;
}
