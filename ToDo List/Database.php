<?php
	$connect = mysqli_connect("localhost", "root", "", "todo_list");

	if ($connect == false) {
		die("Connection failed");
	}
?>