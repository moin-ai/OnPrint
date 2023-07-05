<?php


include "db_conn.php";

session_start();

if(!isset($_SESSION['username']) || $_SESSION['role']!="registered_user"){
    header("location:../index.php");
}

if(isset($_POST['submit'])){
   
    $userID = $_POST['userID'];
    $U_name = $_POST['U_name'];
    $U_address = $_POST['U_address'];
    $uploadPDF = $_POST['uploadPDF'];
    $orderDate = $_POST['orderDate'];
    $deliveryLocation = $_POST['deliveryLocation'];

    $sql = "INSERT INTO `orders`(`orderID`,`userID`, `U_name`, `U_address`,`uploadPDF`, `orderDate`, `deliveryLocation`) 
    VALUES (NULL, '$userID','$U_name','$U_address','$uploadPDF','$orderDate','$deliveryLocation')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: success_order.php?msg=New Record Created Successfully!");
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
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
    <!-- -----------Header----------- -->
<div class="nav-container">
<a href="registered_user.php"><img id="logo" src="onp logo.png" alt="Logo"></a>
  <nav>
    <a href="registered_user.php">HOME</a>
    <a href="#">USER</a>
    <a href="user_order.php">ORDER</a>
    <a href="#">PAYMENT</a>
    <a href="#">APPROVAL</a>
    <a href="#">ADMINISTRATION</a>
    <a class="logout" href="../logout.php">LOGOUT</a>
    <div id="indicator"></div>


  </nav>
</div>
  <!-- -----------Header----------- -->

<div class="title title-light justify-content-center fs-3 mb-5" style="background-color:aquamarine;">
<h1><center>ORDER Now!</center> </h1></div>


<div class="welcome">
<h1>&nbsp &nbsp&nbsp&nbsp Logged in as <?=$_SESSION['username'] ?></h1>
</div>



<div class="container">
    <div class="text-center mb-4">
        <h3>USER#CB20137</h3>
        <p class="text-muted">Please complete the form<br>(All the information is required for the security rules of the system)</p>
    </div>
    


 






    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50w; min-width:300px;">
        
    <div class="row mb-3">
        <div class="col">
            <label class="form-lebel">User ID</label>
            <input type="text" class="form-control" name="userID" >
        </div>
    </div>

    <div class="mb-3">
        <label class="form-lebel">User Name</label>
        <input type="text" class="form-control" name="U_name">
    </div>
    <div class="mb-3">
        <label class="form-lebel">User Address</label>
        <input type="phone" class="form-control" name="U_address">
    </div>
    <div class="form-group">
    <label for="uploadPDF">Upload PDF:</label>
    <input type="file" class="form-control-file" name="uploadPDF">
</div>
    
    <div class="mb-3">
        <label class="form-lebel">Order Date</label>
        <input type="date" class="form-control" name="orderDate">
    </div>
    
    <div class="mb-3">
        <label class="form-lebel">Delivery Location</label>
        <input type="text" class="form-control" name="deliveryLocation">
    </div>
    <div>
        <button type="submit" class="btn btn-success" name="submit">CONFIRM</button>
        <a href="success_order.php" class="btn btn-danger">CANCEL</a>
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