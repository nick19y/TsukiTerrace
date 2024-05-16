<?php

namespace TsukiTerrace\MVC\Controller;

use PDO;
use TsukiTerrace\MVC\Repository\ProductRepository;

class ProductListController implements Controller
{
    public function __construct(private ProductRepository $productRepository)
    {
    }
    public function proccessRequest(): void
    {
        $productList = $this->productRepository->read();
        require_once __DIR__ . '/../../head-html.php'; ?>
        <body>
            <header>
                <div class="back">
                    <a href="/">
                        <img src="/img/back.png" alt="">
                    </a>
                </div>
                <?php require_once __DIR__ . '/../../logo-html.php'; ?>
            </header>
            <main>
                <div class="admin-area">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" class="col-1">id</th>
                                <th scope="col" class="col-2">Nome</th>
                                <th scope="col" class="col-5">Descrição</th>
                                <th scope="col" class="col-1">Preço</th>
                                <th scope="col" class="col-3">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($productList as $product):?>
                            <tr>
                                <th scope="row" class="text-center"><?= $product->id; ?></th>
                                <td class="text-center"><?=$product->name; ?></td>
                                <td class="description"><?=$product->description; ?></td>
                                <td class="text-center">R$ <?=$product->price; ?></td>
                                <td class="text-center">
                                    <a class="link-a" href="/update-product?id=<?=$product->id; ?>">
                                        <button type="button" class="btn btn-primary mx-2">Atualizar</button>
                                    </a>
                                    <a class="link-a" href="/delete-product?id=<?= $product->id; ?>">
                                        <button type="button" class="btn btn-danger">Excluir</button>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
                <div class="btn-div">
                    <a href="/new-product">
                        <button type="button" class="btn btn-light">Cadastrar Produto</button>
                    </a>
                </div>
            </main>
            <?php require_once __DIR__ . '/../../end-html.php';
    }
}