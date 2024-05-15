<?php
    $pdo = new PDO("mysql:host=localhost;dbname=tsuki_terrace", "root", "");
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $product = [
        'name'=>'',
        'description'=>'',
        'price'=>'',
    ];

    if($id!==false && $id !== null){
        $sql = "SELECT * FROM products WHERE id = ?";
        $statement = $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $id, PDO::PARAM_INT);
        $statement->execute();
        $product = $statement->fetch(PDO::FETCH_ASSOC);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Tsuki Terrace</title>
</head>
<body>
    <main>
        <div class="div-form">
            <div class="logo">
                <img src="/img/logo64.png" alt="">
                <h1>TsukiTerrace</h1>
            </div>
            <form class="form" method="post">
                <label class="label-form" for="name">Nome:</label>
                <input class="input-form" type="text" name="name" value="<?= $product['name']; ?>">
                
                <label class="label-form" for="description">Descrição:</label>
                <textarea class="input-form" name="description"><?= $product['description']; ?></textarea>
                

                <label class="label-form" for="price">Preço:</label>
                <input class="input-form" type="text" name="price" value="<?= $product['price']; ?>">
                
                <!-- <label class="label-form" for="image">Imagem:</label>
                <input class="input-form" type="file" name="image"> -->
                
                <button class="btn-form">Enviar</button>
            </form>
        </div>
    </main>
</body>
</html>