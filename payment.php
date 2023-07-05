<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    <script src="functions.js"></script>
    <link rel="stylesheet" href="css/style payment.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
<div class="nav-container">
<a href="index.php"><img id="logo" src="../media/onp logo.png" alt="Logo"></a>
  <nav>
    <a href="registered_user.php">HOME</a>
    <a href="registered_user.php">USER</a>
    <a href="user_order.php">ORDER</a>
    <a href="payment.php">PAYMENT</a>
    <a href="#">APPROVAL</a>
    <a href="#">ADMINISTRATION</a>
    <a class="logout" href="../logout.php">LOGOUT</a>
    <div id="indicator"></div>


  </nav>
</div>
<!-- end header -->
	
		
		<form method="post" action="receipt.php">
		
			<div class="contentleft">
			
				<br><label>Payment ID</label><br>
				
				<br><label>Payment Total(RM)</label><br>
				
				<br><label>Payment Method</label><br>
				
				<br><label>Payment Date</label><br>
				
				<br><label>Order ID</label><br>
				
				<br><label>Delivery Address or COD</label><br>
			
			</div>
			
			<div class="contentmid">
			
				<br><label>:</label><br>
				
				<br><label>:</label><br>
				
				<br><label>:</label><br>
				
				<br><label>:</label><br>
				
				<br><label>:</label><br>
				
				<br><label>:</label><br>
			
			</div>
			
			<div class="contentright">
			
				<input type ="text" name="paymentID" maxlength="10" class="inputbox"><br>
			
				<input type ="text" name="paymentTotal" maxlength="50" class="inputbox"><br><br>
			
				<select name="paymentMethod" id="paymentMethod" class="inputbox" style="width: 103%">
				
					<option value="Cash">Cash</option>
					<option value="Online">Online Payment</option>
				
				</select>
				
				<br><br>
			
				<input type ="date" name="paymentDate" maxlength="10" class="inputbox"><br><br><br>
			
				<input type ="text" name="orderID" maxlength="10" class="inputbox"><br>
				
				<input type ="text" name="deliveryAddress" maxlength="100" class="inputbox"><br>
				
				
				<a href="receipt.php"><input type="submit" class="button" value="CHECKOUT"></a>
				
			</div>
		
		</form>
	
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
