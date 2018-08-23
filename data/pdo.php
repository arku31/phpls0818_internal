<?php
$dsn = "mysql:host=127.0.0.1;dbname=basic;charset=utf8";
$pdo = new PDO($dsn, 'root', '123');
$stmt = $pdo->query('SELECT * FROM users where id='.$_GET['id']); //SQL INJECTION
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
die();