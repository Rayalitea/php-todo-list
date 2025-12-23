<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lists</title>
		<style type="text/css">
			body { 
				display: flex; 
				flex-direction: column; 
				align-items: center; 
				background: #f9f9f9; 
				padding-top: 50px; 
			}	
			.header { 
				text-align: center; 
				margin-bottom: 30px; 
			}
			.add-btn { 
				background-color: #4ade80; 
				border: none; 
				padding: 8px 20px; 
				border-radius: 5px; 
				cursor: pointer; 
				color: white; 
				margin-bottom: 20px; 
			}
			
			.todo-item { 
				background: #e5e7eb; 
				width: 500px; 
				padding: 15px; 
				margin-bottom: 10px; 
				border-radius: 8px;
				display: flex; 
				justify-content: space-between; 
				align-items: center;
			}
			
			.todo-title { font-size: 18px; }
			
			.completed-title { text-decoration: line-through; color: #6b7280; }
			
			.a { 
				display: flex;
				gap: 5px; 
			}
			
			.btn-complete { background-color: #86efac; color: #065f46; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer; }
			
			.btn-update { background-color: #facc15; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer; }
			
			.btn-delete { background-color: #f87171; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer; }
		</style>
	</head>
	
	<body>
		<div class="header">
			<h1>Your Focus Board</h1>
			<p>"Great things start here..."</p>
			<a href="Create.php" class="add-btn">Add +</a>
		</div>
		
		<?php
			require "Database.php";
			$result = mysqli_query($connect, "SELECT * FROM tasks");

			while ($row = mysqli_fetch_assoc($result)) { 
				$completedClass = $row['is_complete'] ? 'completed-title' : '';
				$toggleText = $row['is_complete'] ? 'Uncomplete' : 'Complete';
		?>
		
				<div class="todo-item">
					<span class="todo-title <?php echo $completedClass; ?>">
						<?php echo htmlspecialchars($row['title']); ?>
					</span>

					<div class="a">
						<a href="Toggle.php?id=<?php echo $row['id']; ?>">
							<button class="btn-complete"><?php echo $toggleText; ?></button>
						</a>
						<a href="Update.php?id=<?php echo $row['id']; ?>">
							<button class="btn-update">Update</button>
						</a>
						<a href="Delete.php?id=<?php echo $row['id']; ?>">
							<button class="btn-delete">Delete</button>
						</a>
					</div>
				</div>
			<?php } ?>
	</body>
</html>