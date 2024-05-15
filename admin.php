<?php
    $pdo = new PDO("mysql:host=localhost;dbname=tsuki_terrace", "root", "");
    $productList = $pdo->query('SELECT * FROM products;')->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/admin.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Tsuki Terrace</title>
</head>
<body>
    <header>
        <div class="back">
            <a href="main.php">
                <img src="/img/back.png" alt="">
            </a>
        </div>
        <div class="logo">
            <img src="/img/logo64.png" alt="">
            <h1>TsukiTerrace</h1>
            <p class="slogan">Onde a comida é uma arte</p>
        </div>
    </header>
    <main>
        <div class="admin-area">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th scope="col" class="col-1">id</th>
                        <th scope="col" class="col-3">Nome</th>
                        <th scope="col" class="col-4">Descrição</th>
                        <th scope="col" class="col-1">Preço</th>
                        <th scope="col" class="col-3">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productList as $product):?>
                    <tr>
                        <th scope="row" class="text-center"><?= $product['id']?></th>
                        <td class="text-center"><?=$product['name']?></td>
                        <td class="description"><?=$product['description']?></td>
                        <td class="text-center">R$ <?=$product['price']?></td>
                        <td class="text-center">
                            <a href="/update-product?id=<?=$product['id'];?>">
                                <button type="button" class="btn btn-primary mx-2">Atualizar</button>
                            </a>
                            <a href="/delete-product?id=<?= $product['id'];?>">
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
</body>
</html>