<?php

$id = $_GET['id'];

$pdo = new PDO("mysql:host=localhost;dbname=marlin_dev;", "root", "");

$sql = "DELETE FROM images WHERE id=:id LIMIT 1";
$statement = $pdo->prepare($sql);
$statement->bindValue(':id', $id);
$statement->execute();

header("Location: /task_17.php");