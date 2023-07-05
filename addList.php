<?php
	include("../connect.php");
	
	if(isset($_POST['Confirm']))
	{		
		$DeliveryID = $_POST['DeliveryID'];
		$deliveryDate = $_POST['deliveryDate'];
		$deliveryStatus = $_POST['deliveryStatus'];
		$deliveryAddress = $_POST['deliveryAddress'];
		$userID = $_POST['userID'];
		
		if(empty($_POST['DeliveryID']))
		{
			header("location:add_list.php?error=!! Delivery ID is required !!");
			exit();
		}
		
		elseif(empty($_POST['deliveryAddress']))
		{
			header("location:add_list.php?error=!! Delivery Address is required !!");
			exit();
		}
		
		elseif(empty($_POST['userID']))
		{
			header("location:add_list.php?error=!! User ID is required !!");
			exit();
		}
		
		else
		{
			$query = "INSERT INTO collectedlist (DeliveryID, deliveryDate, deliveryStatus, deliveryAddress, userID)
						VALUES ('$collectedListID', '$DeliveryID', '$deliveryDate', '$deliveryStatus', '$deliveryAddress', '$userID')";

			$result = mysqli_query($conn, $query);
			
			if($result)
			{
				echo "Data successfully added into the system";
				header("location:delivery_list.php");
			}
			else
			{
				die("Error inserting data !  ".$conn->error);
				header("location:delivery_list.php");
			}
		}
	}
	
	else
	{
		header("location:delivery_list.php");
	}
	

?>