<?php
	require "Database.php";

	$id = $_GET['id'];
	$result = mysqli_query($connect, "SELECT * FROM tasks WHERE ID=$id");
	$task = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lists</title>
		<style type="text/css">
			body { 
				font-family: sans-serif; 
				display: flex; 
				justify-content: center; 
				align-items: center; 
				height: 100vh; 
				margin: 0; 
			}
			.card { 
				text-align: center; 
				border: 1px solid #ddd; 
				padding: 40px; 
				border-radius: 10px; 
				width: 400px; 
			}
			.update-btn { 
				background-color: #bfdbfe; 
				border: 1px solid #3b82f6; 
				padding: 10px 30px; 
				border-radius: 5px; 
				color: #1e40af;
			}
		</style>
	</head>
	
	<body>
		<div class="card">
			<h1>Update your tasks</h1>
			
			<form method="POST" action="update_action.php">
				<input type="hidden" name="id" value="<?php echo $task['id']; ?>">
				<input type="text" name="title" value="<?php echo $task['title']; ?>">
				<br><br>
				<button class="update-btn" type="submit">Update</button>
			</form>
		</div>

	</body>
</html>