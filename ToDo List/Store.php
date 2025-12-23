<?php
	require "Database.php";

	$title = $_POST['title'];

	$sql = "INSERT INTO tasks (title) VALUES ('$title')";
	mysqli_query($connect, $sql);

	header("Location: List.php");
	exit;
?>