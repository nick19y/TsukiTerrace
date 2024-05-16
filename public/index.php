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


if(!array_key_exists('PATH_INFO', $_SERVER)||$_SERVER['PATH_INFO']==='/'){
    $controller = new MainListController($productRepository);
} else if($_SERVER['PATH_INFO']==='/new-product'){
    if($_SERVER['REQUEST_METHOD']==='GET'){
        $controller = new ProductFormController($productRepository);
    } else if($_SERVER['REQUEST_METHOD']==='POST'){
        $controller = new NewProductController($productRepository);
    }
} else if($_SERVER['PATH_INFO']==='/update-product'){
    if($_SERVER['REQUEST_METHOD']==='GET'){
        $controller = new ProductFormController($productRepository);
    } else if($_SERVER['REQUEST_METHOD']==='POST'){
        $controller = new UpdateProductController($productRepository);
    }
} else if($_SERVER['PATH_INFO']==='/delete-product'){
    $controller = new DeleteProductController($productRepository);
} else if($_SERVER['PATH_INFO']==='/admin'){
    $controller = new ProductListController($productRepository);
} else if($_SERVER['PATH_INFO']==='/login'){
    require_once __DIR__ . '/../login.php';
} else if($_SERVER['PATH_INFO']==='/login'){
    require_once __DIR__ . '/../login.php';
} else if($_SERVER['PATH_INFO']==='/register-user'){
    require_once __DIR__ . '/../register-user.php';
} else{
    $controller = new Error404Controller();
}
/** @var Controller $controller */
$controller->proccessRequest();