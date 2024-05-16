<?php
return [
    'GET|/' => \TsukiTerrace\MVC\Controller\MainListController::class,
    'GET|/new-product' => \TsukiTerrace\MVC\Controller\ProductFormController::class,
    'POST|/new-product' => \TsukiTerrace\MVC\Controller\NewProductController::class,
    'GET|/update-product' => \TsukiTerrace\MVC\Controller\ProductFormController::class,
    'POST|/update-product' => \TsukiTerrace\MVC\Controller\UpdateProductController::class,
    'GET|/delete-product' => \TsukiTerrace\MVC\Controller\DeleteProductController::class,
    'POST|/admin' => \TsukiTerrace\MVC\Controller\ProductListController::class,
    'GET|/admin' => \TsukiTerrace\MVC\Controller\ProductListController::class,
];