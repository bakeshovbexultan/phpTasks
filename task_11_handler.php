<?php

session_start();

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$pdo = new PDO("mysql:host=localhost;dbname=marlin_dev;", "root", "");

$sql = "SELECT * FROM users WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($task)) {
	$message = 'Этот электронный адрес уже занят другим пользователем';
	$_SESSION['message'] = $message;

	header("Location: /task_11.php");
	exit;
}

$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email, 'password' => $password]);

header("Location: /task_11.php");