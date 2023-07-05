<?php

$conn = mysqli_connect("localhost", "root", "", "onprint")or die(mysql_error());

			$paymentID = $_POST['paymentID'];
			$paymentTotal = $_POST['paymentTotal'];
			$paymentMethod = $_POST['paymentMethod'];
			$userID = $_POST['paymentDate'];
			$orderID = $_POST['orderID'];
			$deliveryAddress = $_POST['deliveryAddress'];
	
			$query = "INSERT INTO payment(paymentID, paymentTotal, paymentMethod, paymentDate, orderID, deliveryAddress) values('$paymentID', '$paymentTotal', '$paymentMethod', '$paymentDate', '$orderID', '$deliveryAddress')";


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


header("location: /pay/receipt.php");
	exit;


?>
