<?php

	$conn = mysqli_connect("localhost", "root", "", "Project");
	
	$paymentID = $_POST['paymentID'];
	$paymentTotal = $_POST['paymentTotal'];
	$paymentMethod = $_POST['paymentMethod'];
	$deliveryAddress = $_POST['deliveryAddress'];
	
	extract($_POST);

	$sql = "UPDATE `Payment` SET PaymentTotal = '$_POST[paymentTotal]', PaymentMethod = '$_POST[paymentMethod]', DeliveryAddress = '$_POST[deliveryAddress]' WHERE PaymentID = '$_POST[paymentID]'";

	$run = mysqli_query($conn, $sql) or die(mysqli_error());


	if ($run)
	{
		
		echo "Data Updated!";
		
	}
	
	else
	{
		
		echo "Data Not Updated!";
		
	}


    header("location: history.php");  
	exit;


?>


