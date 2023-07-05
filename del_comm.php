<?php
$con = mysqli_connect("localhost:3307", "root", "", "onprint_");

session_start();



mysqli_query($con,"DELETE FROM commission WHERE C_ID = '".$_GET['del_comm']."'");

header("location:/onprint/list_comm_new.php");  

?>