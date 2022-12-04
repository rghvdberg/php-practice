<?php

try {
    $pdo = new PDO('mysql:host=172.21.0.2;dbname=mytodos', 'root', '');
} catch (PDOException $e) {
    die(var_dump($e));
}

$statement = $pdo->prepare('select * from todos');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($tasks);


require 'index.view.php';
