<?php
	require "Database.php";

	$id = $_POST['id'];
	$title = $_POST['title'];

	mysqli_query($connect, "UPDATE tasks SET title='$title' WHERE id=$id");

	header("Location: List.php");
	exit;
?>