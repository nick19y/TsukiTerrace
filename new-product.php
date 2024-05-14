<?php
$pdo = new PDO("mysql:host=localhost;dbname=tsuki_terrace", "root", "");

$name = filter_input(INPUT_POST, 'name');
$description = filter_input(INPUT_POST, 'description');
$price = filter_input(INPUT_POST, 'price');
if($name === false){
    header('Location: admin.php?sucesso=0');
    exit();
}
if($description === false){
    header('Location: admin.php?sucesso=0');
    exit();
}
if($price === false){
    header('Location: admin.php?sucesso=0');
    exit();
}


$sql = 'INSERT INTO products (name, description, price) VALUES (?,?,?)';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $name);
$statement->bindValue(2, $description);
$statement->bindValue(3, $price);
if($statement->execute()==false){
    header('Location: admin.php?sucesso=0');
} else{
    header('Location: admin.php?sucesso=1');
}
