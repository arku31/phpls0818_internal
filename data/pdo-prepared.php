<?php
$dsn = "mysql:host=127.0.0.1;dbname=basic;charset=utf8";
$pdo = new PDO($dsn, 'root', '123');
$prepare = $pdo->prepare('SELECT * FROM users where id > :uslovie1 AND id < :uslovie2');
$id = $_GET['id'];
$prepare->execute(['uslovie1' => $id, 'uslovie2' => 15]);
$data = $prepare->fetchAll(PDO::FETCH_OBJ);
echo '<pre>';
print_r($data);
die();