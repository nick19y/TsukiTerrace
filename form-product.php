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
<?php require_once 'head-html.php' ?>
<body>
    <main>
        <div class="div-form">
        <?php require_once 'logo-html.php' ?>
            <form" method="post">
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
      <?php require_once 'end-html.php' ?>