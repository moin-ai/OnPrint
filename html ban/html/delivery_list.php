<?<?php
	include("../connect.php");
	
	if(isset($_POST['search']))
	{
		$valueToSearch = $_POST['valueToSearch'];
		// search in all table columns
		// using concat mysql function
		
		$query = "SELECT * FROM `delivery` 
					WHERE CONCAT(`DeliveryID`, `deliveryDate`, `deliveryStatus`, `deliveryAddress`, `userID`) LIKE '%".$valueToSearch."%'";
		
		$search_result = filterTable($query);
		
	}
	else 
	{
		$query = "SELECT * FROM `delivery`";
		$search_result = filterTable($query);
	}

	// function to connect and execute the query
	function filterTable($query)
	{
		$connect = mysqli_connect("localhost", "root", "", "onpp");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
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
	
	table, tr, th, td
	{
		border-collapse: collapse;
		padding: 10px;
		text-align: center;
	}

	th
	{
		background-color: black;
		color: white;
		font-weight: bold;
	}

	tr:nth-child(even)
	{
		background-color: #f6e3bc;
	}
	
	tr:nth-child(odd)
	{
		background-color: #fcf6e9;
	}

	tr:hover 
	{
		background-color: #edc678;
		color: black;
	}

	p
	{
		font-size: 40px;
		font-weight: bold;
		color: black;
		letter-spacing: 3px;
	}

	#greenlinks:link, #greenlinks:visited 
	{
	  background-color: #1cb01c;
	  color: white;
	  padding: 6px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  border-radius: 4px;
	  font-weight: bold;
	  width: 100px;
	}

	#greenlinks:hover, #greenlinks:active 
	{
	  background-color: black;
	  color: #F2AA4CFF;
	}
	
	#redlinks:link, #redlinks:visited 
	{
	  background-color:#eb2d53;
	  color: white;
	  padding: 6px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  border-radius: 4px;
	  font-weight: bold;
	  width: 100px;
	}

	#redlinks:hover, #redlinks:active 
	{
	  background-color: black;
	  color: #F2AA4CFF;
	}
	
	#yellowlinks:link, #yellowlinks:visited 
	{
	  background-color:#F2AA4CFF;
	  color: black;
	  padding: 6px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  border-radius: 4px;
	  font-weight: bold;
	  width: 180px;
	}

	#yellowlinks:hover, #yellowlinks:active 
	{
	  background-color: black;
	  color: #F2AA4CFF;
	}
	
</style>

</head>
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

<!-- all buttons section -->
<div class="container">
  <div class="row">
    <div class="column">
	  
	    <!-- html for layout -->
		<center>
		
		<h1 class="xlarge-font" style="color:#F2AA4CFF"><b>Order Acceptance</b></h1>
		<div class="dropdown">
			<!-- <div class="dropdown-content">
			</div> -->
		
		</div><br><br><br>
		
			<table>
				  <tr style="background-color:black; color: white" id="list">
					<td><b>DELIVERY ID</b></td>
					<td><b>DELIVERY DATE</b></td>
					<td><b>DELIVERY STATUS</b></td>
					<td><b>DELIVERY ADDRESS</b></td>
					<td><b>USER ID</b></td>
					
					<td colspan="4" style="background-color:black; color: white"><b>ACTIONS</b></td>
				  </tr>
				  
				  <?php
					while($row=mysqli_fetch_assoc($result))
					{
						$DeliveryID = $row['DeliveryID'];
						$deliveryDate = $row['deliveryDate'];
						$deliveryStatus = $row['deliveryStatus'];
						$deliveryAddress = $row['deliveryAddress'];
						$userID = $row['userID'];
						
						
				  ?>
					<tr id="list">
						<td><?php echo $DeliveryID ?></td>
						<td><?php echo $deliveryDate ?></td>
						<td><?php echo $deliveryStatus ?></td>
						<td><?php echo $deliveryAddress ?></td>
						<td><?php echo $userID ?></td>
						<td><a id="yellowlinks" href="generate_QR.php?getQR=<?php echo $deliveryListID ?>">Generate QR Code</a></td>
						<td><a id="greenlinks" id="links" href="update_orders.php?GetList=<?php echo $orderID ?>">Prepared</a></td>
						<td><input type="checkbox" id="DeleteorderList" name="DeleteorderList" value='<?= $DeliveryID ?>'></td><!-- checkbox to delete banyak2 -->
					</tr>
				  <?php
					}
				 ?>
				  	
			</table>
			<br>
		</center>
			<input id="but" type="button" value="Back" onclick="location.href='../mailcenter_officer.php'">
			<input id="but" type="button" value="Add Record" onclick="location.href='add_list.php'">
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

  <!-- Delete List Confirmation -->
  <script>
  function deleteorderList()
  {
	if (confirm("All details of the list will be deleted & cannot be restored\nAre you sure you want to delete this list?"))
	{
		alert("The list has been deleted");
	}
	else
	{
		alert("Cancelled");
	}
  }
  
  </script>

</body>
</html>