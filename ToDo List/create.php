<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
	<head >
		<meta charset="utf-8">
		<title>Lists</title>
		<link rel="stylesheet" href="style.css">
		<style type="text/css">
			body { 
				display: flex; 
				justify-content: center; 
				align-items: center; 
				height: 100vh; 
				margin: 0; 
			}
			.card { 
				background-color: var(--bg-card);
				border: 1px solid var(--border-color);
				text-align: center; 
				padding: 40px; 
				border-radius: 10px; 
				width: 400px; 
			}
			textarea { 
				width: 100%; 
				height: 60px; 
				border: 1px solid #ccc; 
				border-radius: 5px; 
				padding: 10px; 
				margin-bottom: 20px; 
				background: #f3f4f6;
			}
			/* box to enter to do thing..*/
			.add-btn { 
				background-color: var(--green);
				color: white;
				padding: 10px 30px; 
				border-radius: 5px; 
				cursor: pointer; 
			}
			/*add button*/
		</style>
	</head>
    <body class="<?= $theme ?> <?= $font ?>">
		<div class="card">
			<h1>Add "to do"</h1>
			<form method="POST" action="Store.php">
				<textarea name="title" placeholder="What's next on your agenda?"></textarea>
				<br>
				<button type="submit" name="submit" class="add-btn">Add +</button>
				<!--لما اضغط عليه تتخزن في قاعدة البيانات-->
			</form>
		</div>

	</body>
</html>