<?php

$pdo = new PDO("mysql:host=localhost;dbname=tsuki_terrace", "root", "");

$pdo->exec('CREATE TABLE users(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255),
    password  VARCHAR(255)
    );');