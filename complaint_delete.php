<?php
	include("../connect.php");

	//delete one by one
	if(isset($_GET['Deletecomplaintlist']))
	{
		$complaint_ID = $_GET['Deletecomplaintlist'];
		
		$query = "DELETE FROM complaint
					WHERE complaint_ID = '".$complaint_ID."'";
			
		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully deleted from system";
			header("location:complaintlist.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
	}
	else
	{
		header("location:complaintlist.php");
	}
?>