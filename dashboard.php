
<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="functions.js"></script>
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
	 <style>

div{
        padding: 20px;
}

*{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
	
}

}

.col{
	flex-basis: 50%;
}


.card{
    width: 300px;
    height: 330px;
    display: inline-block;
    border-radius: 10px;
    padding: 15px 25px;
    box-sizing: border-box;
    margin: 10px 15px;
}


.card1{
    background-color: #000000;
	font-size:200%;
	color:white;
}



card:hover {transformY(-10px);}

p:hover {background-color: #EFF9DE;}
</style>

   
      
</head>
<body>
<div class="nav-container">
<a href="index.php"><img id="logo" src="media/onp logo.png" alt="Logo"></a>
  <nav>
    <a href="#">HOME</a>
    <a href="#">USER</a>
    <a href="#">ORDER</a>
    <a href="#">PAYMENT</a>
    <a href="#">APPROVAL</a>
    <a href="/onprint/dashboard.php">ADMINISTRATION</a>
    <a class="logout" href="logout.php">LOGOUT</a>
  


  </nav>
</div>
<div class="col">
    <div class="card card1">
        <a type= "button" href='/onprint/list_comm_new.php'><h5><b>RIDER COMMISSION FEE</b></h5></a>
        <p>Manage the commission fee for the rider.</p>
</div>
<div class="card card1">
        <a type= "button" href='/onprint/report_1.php'><h5><b>INVENTORY REPORT</b></h5></a>
        <p>The report of inventory for both outlet.</p>
</div>
<div class="card card1">
        <a type= "button" href='/onprint/report_2.php'><h5><b>ORDER AND SALES REPORT</b></h5></a>
        <p>The report for the order and sales for both outlet.</p>
</div>


    </body>
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
		
		  <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
 

</html>