<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paymentdetail</title>
    <script src="functions.js"></script>
    <link rel="stylesheet" href="css/style payment.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
<div class="nav-container">
<a href="index.php"><img id="logo" src="images/onp logo.png" alt="Logo"></a>
  <nav>
    <a href="#">HOME</a>
    <a href="#">USER</a>
    <a href="#">ORDER</a>
    <a href="#">PAYMENT</a>
    <a href="#">APPROVAL</a>
    <a href="#">ADMINISTRATION</a>
    <a class="logout" href="logout.php">LOGOUT</a>
    <div id="indicator"></div>


</nav>
</div>
<!-- end header -->

		<?php

			$conn = mysqli_connect("localhost", "root", "", "Project") or die(mysqli_error());
	
			$paymentID = $_POST['paymentID'];
			$paymentTotal = $_POST['paymentTotal'];
			$paymentMethod = $_POST['paymentMethod'];
			$userID = $_POST['userID'];
			$orderID = $_POST['orderID'];
	
			$query = "INSERT INTO Payment(PaymentID, PaymentTotal, PaymentMethod, UserID, OrderID) values('$paymentID', '$paymentTotal', '$paymentMethod', '$userID', '$orderID')";
	
			$run = mysqli_query($conn, $query) or die(mysqli_error());
	
			if ($run)
			{
		
				echo("<b><br><br>Data Inserted Successfully!<br><br></b>");
		
			}
	
			else
			{
		
				echo "Data Not Inserted!";
		
			}

		?>
		
		<div class="contentleft">
			
			<br><label>Payment ID</label><br><br>
				
			<br><br><label>Payment Total(RM)</label><br><br>
				
			<br><br><label>Payment Method</label><br><br>
				
			<br><br><label>UserID</label><br><br>
				
			<br><br><label>OrderID</label><br><br>
			
		</div>
			
		<div class="contentmid">
			
			<br><label>:</label><br><br>
				
			<br><br><label>:</label><br><br>
				
			<br><br><label>:</label><br><br>
				
			<br><br><label>:</label><br><br>
				
			<br><br><label>:</label><br><br>
			
		</div>
		
		<div class="contentright">
		
			<?php
			
				echo "<br>";
				
				echo $paymentID;
				
				echo "<br><br><br><br>";
						
				echo $paymentTotal;
				
				echo "<br><br><br><br>";
						
				echo $paymentMethod;
				
				echo "<br><br><br><br>";
						
				echo $userID;
				
				echo "<br><br><br><br>";
						
				echo $orderID;
			
			?>
			
			<form method="post" action="receipt.php">
			
				<input type="hidden" name="paymentID" value=$paymentID>
				
				<a href="receipt.php"><input type="submit" class="button" value="Print Receipt"></a>
				
			<form>
		
		</div>
	
	</body>
	
<!--  footer -->
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
					<p><a href="mailto:support@company.com">onprint@xmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About On Print</span>
					On Print is your go-to destination for all your printing needs. We offer a variety of services at affordable prices, all easily accessible online. Trust us to handle all your printing needs, from business cards to banners, and everything in between."
                </p>



			</div>

		</footer>
</html>