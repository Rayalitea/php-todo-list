<?php
	require "Database.php";

	$id = $_GET['id'];

	mysqli_query($connect, "UPDATE tasks SET is_complete = NOT is_complete WHERE id=$id");

	header("Location: List.php");
	exit;
?>