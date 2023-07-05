<!DOCTYPE html>

<html>

	<head>
	
		<title>Create Table</title>
	
	</head>
	
	<body>
		
		<?php
		
			$link = mysqli_connect("localhost", "root", "", "onprint");
			if (!$link)
			{
				
				die('Could not connect: ' . mysqli_connect_error());
			
			}
			
			mysqli_select_db($link, "project") or die(mysqli_connect_error());
			
			$sql = "CREATE TABLE User(UserID VARCHAR(10), UserPassword VARCHAR(50), UserFirstName VARCHAR(50), UserLastName VARCHAR(50), UserEmail VARCHAR(50), UserPhoneNum INT, UserAddress VARCHAR(50), UserState VARCHAR(20), UserPoscode INT, PRIMARY KEY(UserID))";
			
			if (mysqli_query($link, $sql))
			{
				
				echo "Table created successfully\n";
				
			}
			
			else
			{
    
				echo 'Error creating table: ' . mysqli_error($link) . "\n";
			}
			
			mysqli_close($link);
		
		?>
	
	</body>

</html>