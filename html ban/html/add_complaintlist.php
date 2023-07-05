<?php

        $conn = mysqli_connect("localhost", "root", "", "modul4") or die(mysqli_error());



        $complaintID = $_POST['complaintID'];
        $riderID = $_POST['riderID'];
        $complaint_type = $_POST['complaint_type'];
        $complaint_desc = $_POST['complaint_desc'];
        $complaint_status = $_POST['complaint_status'];
        $name = $_POST['name'];


       $sql = "INSERT INTO complaint(complaintID, riderID, complaint_type, complaint_desc, complaint_status, name) values('$complaintID', '$riderID', '$complaint_type', '$complaint_desc' ,'$complaint_status', '$name')";
	
	$run = mysqli_query($conn, $query) or die(mysqli_error());
	
	if ($run)
	{
		
		echo "Data Inserted Successfully!";
		
	}
	
	else
	{
		
		echo "Data Not Inserted!";
		
	}

	header("location:/Onprint/complaintlist.php");
?>