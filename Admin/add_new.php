<?php
session_start();

if(!isset($_SESSION['username']) || $_SESSION['role']!="admin"){
    header("location:../index.php");
}

include "../db_conn.php";

if(isset($_POST['submit'])){
    $userID = $_POST['userID'];
    $U_name = $_POST['U_name'];
    $U_address = $_POST['U_address'];
    $U_telephone = $_POST['U_telephone'];
    $City_ID = $_POST['City_ID'];
    $State_ID = $_POST['State_ID'];

    $sql = "INSERT INTO `registered_user`(`userID`, `U_name`, `U_address`, `U_telephone`, `City_ID`, `State_ID`) 
    VALUES ('$userID','$U_name','$U_address','$U_telephone','$City_ID','$State_ID')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: manage_users.php?msg=New Record Created Successfully!!!");
    }
    else
    echo "Failed: " . mysqli_error($conn);

}


?>

<!-- <h1>Welcome : <?=$_SESSION['username'] ?></h1>
<h2>Logged in as : <? $_SESSION['role'] ?></h2>
<a href="logout.php">Logout</a> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../Functions/admin_functions.js"></script>
    <link rel="stylesheet" href="../style/styles.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body class="body-with-footer">
    <!-- -----------Header----------- -->
<div class="nav-container">
<a href="index.php"><img id="logo" src="../media/onp logo.png" alt="Logo"></a>
  <nav>
    <a href="admin.php">HOME</a>
    <a href="admin.php">USER</a>
    <a href="#">ORDER</a>
    <a href="#">PAYMENT</a>
    <a href="#">APPROVAL</a>
    <a href="#">ADMINISTRATION</a>
    <a class="logout" href="../logout.php">LOGOUT</a>
    <div id="indicator"></div>


  </nav>
</div>
  <!-- -----------Header----------- -->
  <div class="body-container d-flex">
    <div class="welcome">
        <h4>Welcome : <?=$_SESSION['username'] ?></h4>
    </div>
    <div class="buttons d-flex flex-nowrap">
        <button class="btn btn-primary" onclick="window.location.href='manage_users.php'">Manage Users</button>
        <button class="btn btn-primary" onclick="window.location.href='manage_riders.php'">Manage Riders</button>
        <button class="btn btn-primary" onclick="window.location.href='calculate_user.php'">Calculation</button>
        <button class="btn btn-primary" onclick="window.location.href='user_report.php'">Report</button>
    </div>
</div>

<div class="title title-light justify-content-center fs-3 mb-5" style="background-color:aquamarine;">
<h1><center>MANAGE USERS</center> </h1></div>

<div class="container">
    <div class="text-center mb-4">
        <h3>Add New User</h3>
        <p class="text-muted">Please Fill The Form To Add A New User</p>
    </div>
    
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50w; min-width:300px;">
        <div class="mb-3">
        <label class="form-lebel">User ID</label>
        <input type="text" class="form-control" name="userID" 
        placeholder="123">
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-lebel">User's Name:</label>&nbsp;
            <input type="text" class="form-control" name="U_name" placeholder="Arifuzzaman Moin">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-lebel">User's Address</label>
        <input type="address" class="form-control" name="U_address" 
        placeholder="123 Lorong A, Pekan, Pahang">
    </div>
    <div class="mb-3">
        <label class="form-lebel">User's Telephone</label>
        <input type="phone" class="form-control" name="U_telephone" 
        placeholder="+60145698712">
    </div>
    <div class="mb-3">
        <label class="form-lebel">City ID</label>
        <input type="text" class="form-control" name="City_ID" 
        placeholder="100">
    </div>
    <div class="mb-3">
        <label class="form-lebel">State ID</label>
        <input type="text" class="form-control" name="State_ID" 
        placeholder="100">
    </div>
    <div>
        <button type="submit" class="btn btn-success" name="submit">SAVE</button>
        <a href="admin.php" class="btn btn-danger">CANCEL</a>
    </div>
    </form>
    </div>
</div>

  <!-- -----------Footer-------------- -->
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>On<span>Print</span></h3>

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>
					
					<a href="#">Blog</a>
				
					<a href="#">Pricing</a>
				
					<a href="#">About</a>
					
					<a href="#">Faq</a>
					
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">©All rights reserved On Print 2023</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>15 Rendang Ixora</span> Pekan, Pahang</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+60177552236</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About On Print</span>
					On Print is your go-to destination for all your printing needs. We offer a variety of services at affordable prices, all easily accessible online. Trust us to handle all your printing needs, from business cards to banners, and everything in between."
                </p>



			</div>

		</footer>
          <!-- -----------Footer-------------- -->
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        </body>
</html>