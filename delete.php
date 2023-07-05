<?php

	$conn = mysqli_connect("localhost", "root", "", "onprint");

	$run = mysqli_query($conn,"DELETE FROM Payment WHERE PaymentID = '".$_GET['del_comm']."'"); 

	if($run)
	{
		
		mysqli_query($conn,"DELETE FROM administrator WHERE UserID = '".$_GET['del_comm']."'");
		header("location: history.php");  
	}
	
	header("location: history.php"); 

?>
