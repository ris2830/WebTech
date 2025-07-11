<head>
    <link rel="stylesheet" href="/assets/css/alert.css" />
</head>

<body>
  <noscript>
    <div class="meldung-container meldung-fehler">
      JavaScript ist deaktiviert. Bitte aktivieren Sie JavaScript in Ihrem Browser, um diese Website korrekt nutzen zu können.
    </div>
  </noscript>


<?php
//LAURIN SCHNIZER
session_start();

//Prüfen ob page paramenter da is
$page = $_GET["page"] ?? "home";


switch ($page) {
    case "registration":
        require_once "controller/RegistrationController.php";
        $controller = new RegistrationController();
        $controller->handleRequest();
        exit; //damit restliche html nicht noch auch geladen wird

    case "login":
        require_once "controller/LoginController.php";
        $controller = new LoginController();
        $controller->handleRequest();
        exit;

    case "user":
        require_once "controller/UserController.php";
        $controller = new UserController();
        $controller->handleRequest();
        exit;


    case "logout":
        require_once "controller/LogoutController.php";
        $controller = new LogoutController();
        $controller->handleRequest();
        exit;

    case "about":
        require_once "controller/AboutController.php";
        $controller = new AboutController();
        $controller->handleRequest();
        exit;

    case "category":
        require_once "controller/CategoryController.php";
        $controller = new CategoryController();
        $controller->handleRequest();
        exit;

    case "product":
        require_once "controller/ProductController.php";
        $controller = new ProductController();
        $controller->handleRequest();
        exit;

    case "wishlist":
        require_once "controller/WishlistController.php";
        $controller = new WishlistController();
        $controller->handleRequest();
        exit;

    case "configurator":

        $action = $_GET['action'];

        require_once "controller/ConfiguratorController.php";
        $controller = new ConfiguratorController();
        $controller->handleRequest($action);
        exit;

    case "":
    case "home":
        require_once "controller/HomeController.php";
        $controller = new HomeController();
        $controller->handleRequest();
        exit;

    case "admin":
        $action = $_GET['action'] ?? 'index';
        require_once "controller/AdminController.php";
        $controller = new AdminController();
        $controller->handleRequest($action);
        exit;

    case "cart":
        require_once "controller/CartController.php";
        $controller = new CartController();
        $controller->handleRequest();
        exit;

    case "checkout":
        require_once "controller/CheckoutController.php";
        $controller = new CheckoutController();
        $controller->handleRequest();
        exit;

    case "order_success":
        require_once "controller/OrderSuccessController.php";
        $controller = new OrderSuccesController();
        $controller->handleRequest();
        exit;

    case "orders":
        require_once "controller/OrdersController.php";
        $controller = new OrdersController();
        $controller->handleRequest();
        exit;


    default:
        require_once "controller/FileNotFoundController.php";
        $controller = new FileNotFoundController();
        $controller->handleRequest();
        exit;
}
?>