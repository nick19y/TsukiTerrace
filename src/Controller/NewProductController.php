<?php

namespace TsukiTerrace\MVC\Controller;

use TsukiTerrace\MVC\Entity\Product;
use TsukiTerrace\MVC\Repository\ProductRepository;

class NewProductController implements Controller
{
    public function __construct(private ProductRepository $productRepository)
    {
    }
    public function proccessRequest():void
    {
    $name = filter_input(INPUT_POST, 'name');
        if($name === false){
            header('Location: admin?success=0');
            return;
        }
    $description = filter_input(INPUT_POST, 'description');
        if($description === false){
            header('Location: admin?success=0');
            return;
        }
    $price = filter_input(INPUT_POST, 'price');
        if($price === false){
            header('Location: admin?success=0');
            return;
        }
    $success = $this->productRepository->create(new Product($name, $description, $price));
        if($success===false){
            header('Location: admin?success=0');
        } else{
            header('Location: admin?success=0');
        }
    }
}