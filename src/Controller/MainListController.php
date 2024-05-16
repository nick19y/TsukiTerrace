<?php

namespace TsukiTerrace\MVC\Controller;

use PDO;
use TsukiTerrace\MVC\Repository\ProductRepository;

class MainListController implements Controller
{
    public function __construct(private ProductRepository $productRepository)
    {
    }
    public function proccessRequest():void
    {
        $productList = $this->productRepository->read();
        require_once __DIR__ . '/../../head-html.php'; ?>
            <body>
                <header>
                    <div class="add-item">
                        <a href="/admin">
                            <img src="/img/add.png" alt="">
                        </a>
                    </div>
                    <?php require_once __DIR__ . '/../../logo-html.php'; ?>
                </header>
                <main class="main-page">
                    <div class="bootstrap-carousel">
                        <div class="container">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="/img/slide1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="/img/slide2.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="/img/slide3.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <h1 class="menu-title">Cardápio</h1>
                        <ul class="menu-options">
                            <?php foreach ($productList as $product):?>
                            <li class="menu-item">
                                <img src="/../../public/img/sushi.webp" alt="" class="img-menu">
                                <h3 class="item-title"><?=$product->name;?></h3>
                                <p class="description"><?=$product->description;?></p>
                                <h4 class="price">R$ <?=$product->price;?></h4>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </main>
        <?php require_once __DIR__ . '/../../end-html.php';
    }
}