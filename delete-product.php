<?php
$pdo = new PDO("mysql:host=localhost;dbname=tsuki_terrace", "root", "");


$id = $_GET['id'];
$sql = 'DELETE FROM products WHERE id = ?';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $id);
if($statement->execute()==false){
    header('Location: admin.php?sucesso=0');
} else{
    header('Location: admin.php?sucesso=1');
}
