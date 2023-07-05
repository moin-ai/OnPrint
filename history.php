<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paymenthistory</title>
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
		
		<br><br><br>
		
		<table>
		
			<tr>
			
				<th>Payment ID</th>
				
				<th>Payment Total(RM)</th>
				
				<th>Payment Method</th>
				
				<th>Payment Date</th>
				
				<th>OrderID</th>
				
				<th>Payment Address</th>
				
				<th>Option</th>
			
			</tr>
			
			<?php
			
				$conn = new mysqli("localhost", "root", "", "onprint") or die(mysqli_error());
		
				$sql = "SELECT * FROM payment";
		
				$result = $conn->query($sql) or die(mysqli_error());
				
				while($row = $result->fetch_assoc())
				{
			
					echo "
			
						<tr>
			
							<td>$row[PaymentID]</td>
							<td>$row[totalPayment]</td>
							<td>$row[paymentMethod]</td>
							<td>$row[paymentDate]</td>
							<td>$row[OrderID]</td>
							<td>$row[paymentAddress]</td>
							
							<td>
							
								<a class='buttonhistory' href='update.php?upt_comm=$row[PaymentID]'>UPDATE</a>
								<a class='buttonhistory' href='delete.php?del_comm=$row[PaymentID]'>DELETE</a>
								
							</td>
			
						</tr>
			
					";
			
				}
			
			?>
		
		</table>
		
		<br><br><br>
		
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
