<?php
include "db_conn.php";
$conn = mysqli_connect("localhost","root","","onprint");
$query = "SELECT * FROM orders ORDER BY orderID DESC LIMIT 1";
$result = mysqli_query($conn, $query);
?>

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
<h1><center>You have ordered you item successfully!</center> </h1></div>



<?php

$conn = mysqli_connect("localhost","root","","onprint");
$query = "SELECT * FROM orders ORDER BY orderID DESC LIMIT 1";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);
    echo "<b>OrderID:</b> &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp" . $row["orderID"] . "<br>";
    echo "<b>User ID:</b>&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp" . $row["userID"] . "<br>";
    echo "<b>User Name:</b> &nbsp &nbsp&nbsp&nbsp" . $row["U_name"] . "<br>";
    echo "<b>User Address:</b> &nbsp" . $row["U_address"] . "<br>";
    echo "<b>PDF:</b> &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp " . $row["uploadPDF"] . "<br>";
    echo "<b>OrderDate:</b>  &nbsp&nbsp&nbsp&nbsp" . $row["orderDate"] . "<br>";
    echo "<b>Delivery Location:</b>&nbsp" . $row["deliveryLocation"] . "<br>";

?>


<?php

$conn = mysqli_connect("localhost","root","","onprint");
$query = "SELECT * FROM registered_user ORDER BY City_ID DESC LIMIT 1";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);
    echo "<b>City ID:</b> &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp" . $row["City_ID"] . "<br>";
    
?>



<a href="user_order.php" class="btn btn-success">Add Another Order</a>
<a href="registered_user.php" class="btn btn-danger">Home</a>
<a href="#" class="btn btn-success">Continue to Payment</a>

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