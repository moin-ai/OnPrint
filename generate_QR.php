<?php
	include("../connect.php");
	
	$collectedListID = $_GET['getQR'];
	$query = "SELECT * FROM delivery
				WHERE DeliveryID='".$DeliveryIDID."'";

	$result = mysqli_query($conn, $query);
	
	while($row=mysqli_fetch_assoc($result))
	{
		$DeliveryID = $row['DeliveryID'];
		//$qr_code = $row['qr_code'];
		$deliveryDate = $row['deliveryDate'];
		$deliveryStatus = $row['deliveryStatus'];
		$deliveryAddress = $row['deliveryAddress'];
		$userID = $row['userID'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Delivery List</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

</head>

<style>
.dropdown 
{
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn 
{
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn 
{
  background-color: #F2AA4CFF;
  color: black;
}

.dropdown-content 
{
  display: none;
  position: absolute;
  background-color: #F2AA4CFF;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a 
{
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover 
{
  background-color: black;
  color: white;
}

.dropdown:hover .dropdown-content 
{
  display: block;
}

p.border
{
  border-style: solid;
  border-color: black;
  border-radius: 15px;
  background: black;
  padding: 10px;
  color: white;
  letter-spacing: 12px;
}

input[type=text], input[type=number], input[type=date]
{
  width: 100%;
  padding: 10px;
}

table, tr, th, td
{
	border-collapse: collapse;
	padding: 10px;
	text-align: center;
	border: 1px solid white;
}

th
{
	background-color: #F2AA4CFF;
	color: black;
	font-weight: bold;
	text-align: left;
}

td
{
	width: 80%;
}

tr:nth-child(even)
{
	background-color: #f6e3bc;
}

tr:nth-child(odd)
{
	background-color: #fcf6e9;
}

#butto
{
  background-color: #F2AA4CFF;
  border: none;
  color: black;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width: 20%;
  font-weight: bold;
}

#butto:hover
{
  background-color: black;
  color: #F2AA4CFF;
}

</style>

<body>

 <!-- body -->
   <body class="main-layout position_head">
      
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              li class="nav-item ">
                                 <a class="nav-link" href="index.html">Home</a>
                              </li>
                              <li class="nav-item d_none login_btn">
                                 <a class="nav-link" href="#">Rider</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="glasses.html">Order</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="shop.html">Payment</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Complaint</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="glasses.html">Login</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#">Register</a>
                              </li>
                              <li class="nav-item d_none sea_icon">
                                 <a class="nav-link" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->

<div class="container">
  <div class="row">
    <div class="column">
		<center>
		  <h1 class="xlarge-font" style="color:black"><b>Generate QR Code</b></h1>
		  <form name="GenerateQR" action="generateqr.php?getInfo=<?php echo $collectedListID ?>" method="POST"> <!-- add qr code into database + buat php file named generateqr -->
			  <table>
				<tr>
					<th>QR Code</th>
					<td><img style="margin:auto;" src="images/qr.png" width="250" height="250"></td>
				</tr>
				
				<tr>
					<th>Delivery ID</th>
					<td><input type="text" id="collectedListID" name="DeliveryID" value="<?php echo $DeliveryID ?>" disabled></td>
				</tr>
				
				<tr>
					<th>Delivery Date</th>
					<td><input type="date" id="deliveryDate" name="deliveryDate" value="<?php echo $deliveryDate ?>"></td>
				</tr>
				
				<tr>
					<th>Delivery Status</th>
					<td><input type="text" id="deliveryStatus" name="deliveryStatus" value="<?php echo $deliveryStatus ?>"></td>
				</tr>
				
				<tr>
					<th>Delivery Address</th>
					<td><input type="text" id="deliveryAddress" name="deliveryAddress" value="<?php echo $deliveryAddress ?>"></td>
				</tr>
				
				<tr>
					<th>User ID</th>
					<td><input type="text" id="userID" name="userID" value="<?php echo $userID ?>"></td>
				</tr>
				
				
			</table><br>
		
		<input id="butto" type="button" value="Back" onclick="location.href='delivery_list.php'">
		
			</form>
		  
		</center>
	</div>
  </div>
</div>

 <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> Location</li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br> +01 1234567890</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> demo@gmail.com</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->

</body>
</html>