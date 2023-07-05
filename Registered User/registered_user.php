<?php
session_start();

if(!isset($_SESSION['username']) || $_SESSION['role']!="registered_user"){
    header("location:../index.php");
}
?>



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
    <a href="registered_user.php">HOME</a>
    <a href="registered_user.php">USER</a>
    <a href="user_order.php">ORDER</a>
    <a href="#">PAYMENT</a>
    <a href="#">APPROVAL</a>
    <a href="#">ADMINISTRATION</a>
    <a class="logout" href="../logout.php">LOGOUT</a>
    <div id="indicator"></div>


  </nav>
</div>
  <!-- -----------Header----------- -->
  


<div class="welcome">
<h4> <i class="fas fa-user-check"></i> <?=$_SESSION['username'] ?></h4>
</div>

<div class="body-container">
<button class="btn btn-primary mx-auto d-block text-center" style="font-size: 1.2rem; padding: 10px 20px;" onclick="window.location.href='view_profile.php'">Manage Profile Info</button>


</div>
<img src="../Media/user.jpg" alt="background image" class="repeat-no repeat" style="width: 1000px; height: 1000px; margin: auto; display:block;">

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
</body>
</html>