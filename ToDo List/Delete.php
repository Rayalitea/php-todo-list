<?php
	require "Database.php";

	$id = $_GET['id'];
	mysqli_query($connect, "DELETE FROM tasks WHERE id=$id");

	header("Location: List.php");
	exit;
?>