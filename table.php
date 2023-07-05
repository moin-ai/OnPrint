<!DOCTYPE html>

<html>

	<head>
	
		<title>Create Table</title>
	
	</head>
	
	<body>
		
		<?php
		
			$conn = new sqli("localhost", "root", "");
			
			mysqli_select_db($link, "project") or die(mysqli_connect_error());
			
			$query = file_get_contents ('queries.sql');
			
			if ($conn->query($query) === TRUE)
			{
				
				echo "All Tables Created Successfully!";
				
			}
			
			else
			{
				
				echo "Error Creating Tables!";
				
			}
			
			mysqli_close($link);
		
		?>
	
	</body>

</html>