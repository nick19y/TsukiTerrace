<?php

use TsukiTerrace\MVC\Controller\{
    Controller,
    DeleteProductController,
    Error404Controller,
    MainListController,
    NewProductController,
    ProductFormController,
    ProductListController,
    UpdateProductController
};
use TsukiTerrace\MVC\Repository\ProductRepository;

require_once __DIR__ . '/../vendor/autoload.php';

$pdo = new PDO("mysql:host=localhost;dbname=tsuki_terrace", "root", "");
$productRepository = new ProductRepository($pdo);

$routes = require_once __DIR__ . '/../config/routes.php';

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];

$key = "$httpMethod|$pathInfo";
if(array_key_exists($key, $routes)){

    $controllerClass = $routes["$httpMethod|$pathInfo"];
    
    /** @var Controller $controller */
    
    $controller = new $controllerClass($productRepository);
} else{
    $controller = new Error404Controller();
}

$controller->proccessRequest();