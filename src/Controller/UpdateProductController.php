<?php
namespace TsukiTerrace\MVC\Controller;

use TsukiTerrace\MVC\Entity\Product;
use TsukiTerrace\MVC\Repository\ProductRepository;

class UpdateProductController implements Controller
{
    public function __construct(private ProductRepository $productRepository)
    {
    }
    public function proccessRequest():void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if($id===false || $id===null){
            header('Location: /?success=0');
            return;
        }
        $name = filter_input(INPUT_POST, 'name');
        if($name===false || $name===null){
            header('Location: /?success=0');
            return;
        }

        $description = filter_input(INPUT_POST, 'description');
        if($description===false){
            header('Location: /?success=0');
            return;
        }

        $price = filter_input(INPUT_POST, 'price');
        if($price===false){
            header('Location: /?success=0');
            return;
        }
        $product = new Product($name, $description, $price);
        $product->setId($id);
        $success = $this->productRepository->update($product);
        if($success === false){
            header("Location: admin?success=0");
        } else{
            header("Location: admin?success=1");
        }
    }
}