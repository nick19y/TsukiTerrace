<?php

$pdo = new PDO("mysql:host=localhost;dbname=tsuki_terrace", "root", "");

$name = filter_input(INPUT_POST, 'name');
if($id===false || $id===null){
    header('Location: /?sucesso=0');
    exit();
}

$description = filter_input(INPUT_POST, 'description');
if($description===false){
    header('Location: /?sucesso=0');
    exit();
}

$price = filter_input(INPUT_POST, 'price');
if($price===false){
    header('Location: /?sucesso=0');
    exit();
}

$sql = "UPDATE products SET name=?, description=?, price=?;";
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $name);
$statement->bindValue(2, $description);
$statement->bindValue(3, $price);
$statement->execute();
header("Location: admin.php");