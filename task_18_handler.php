<?php

for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
	upload_file($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]);
}

function upload_file($filename, $tmp_name) {
	$result = pathinfo($filename);

	$filename = uniqid() . "." . $result['extension'];

	move_uploaded_file($tmp_name, 'uploads/' . $filename);
	$image = 'uploads/' . $filename;

	$pdo = new PDO("mysql:host=localhost;dbname=marlin_dev;", "root", "");
	$sql = "INSERT INTO images (image) VALUES (:image)";
	$statement = $pdo->prepare($sql);
	$statement->execute(['image' => $image]);
}

header("Location: /task_16.php");