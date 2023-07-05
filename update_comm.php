<?php

$conn = mysqli_connect("localhost", "root", "", "onprint")or die(mysql_error());

$C_ID = $_POST['C_ID'];
$DeliveryID = $_POST['DeliveryID'];
$C_rate = $_POST['C_rate'];
$C_date = $_POST['C_date'];

$sql= "update commission set DeliveryID='$_POST[DeliveryID]', C_rate='$_POST[C_rate]', C_date='$_POST[C_date]' where C_ID='$_POST[C_ID]'";

$run = mysqli_query($conn, $sql) or die(mysqli_error());

if ($run)
	{
		
		echo 	'<div class="alert alert-success alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Congrats!</strong> Update Data Successfully.
															</div>';
		
	}
	
	else
	{
		
		echo "Data Not Updated!";
		
	}


header("location: /onprint/list_comm_new.php");
	exit;


?>
