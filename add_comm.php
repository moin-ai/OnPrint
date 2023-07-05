<?php

$conn = mysqli_connect("localhost", "root", "", "onprint")or die(mysql_error());

$C_ID = $_POST['C_ID'];
$DeliveryID = $_POST['DeliveryID'];
$C_rate = $_POST['C_rate'];
$C_date = $_POST['C_date'];

$query= "INSERT INTO commission(C_ID,DeliveryID,C_rate,C_date) values('$C_ID','$DeliveryID','$C_rate','$C_date')";

$run = mysqli_query($conn, $query) or die(mysqli_error());

if ($run)
	{
		
		echo 	'<div class="alert alert-success alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Congrats!</strong> New Data Added Successfully.
															</div>';
		
	}
	
	else
	{
		
		echo "Data Not Inserted!";
		
	}


header("location: /onprint/list_comm_new.php");
	exit;


?>
