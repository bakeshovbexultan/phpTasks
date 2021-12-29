<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost;dbname=marlin_dev;", "root", "");

$sql = "SELECT * FROM users WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$task = $statement->fetchAll(PDO::FETCH_ASSOC);

if(empty($task)) {
	$danger = 'Неверный логин или пароль';
	$_SESSION['danger'] = $danger;

	header("Location: /task_14.php");
	exit;
}
if(password_verify($password, $task[0]['password'])) {
	$success = 'Вы успешно авторизовались';
	$_SESSION['success'] = $success;

	header("Location: /task_14.php");
	exit;
} else {
	$danger = 'Неверный логин или пароль';
	$_SESSION['danger'] = $danger;

	header("Location: /task_14.php");
	exit;
}