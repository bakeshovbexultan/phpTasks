<?php

session_start();

if(empty($_SESSION['number'])){
	$_SESSION['number'] = 0;
}
$_SESSION['number']++;
header("Location: /task_13.php");