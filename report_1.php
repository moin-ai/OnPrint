<?php require_once 'coding_report_1.php'; ?>
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
	 <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
     <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
     
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	 <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   
      
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
    <div id="indicator"></div>


  </nav>
</div>
<div class="container overflow-hidden">
  <div class="row gx-5">

    <div class="col">
     <div class="p-3 border bg-light">Inventory Reports (Pekan Outlet)</div>
	<p style="align:center;"><canvas  id="chartjs_bar"></canvas></p>
    </div>
    <div class="col">
      <div class="p-3 border bg-light">Inventory Reports (Gambang Outlet)</div>
	  <p style="align:center;"><canvas  id="chartjs_bar2"></canvas></p>
    </div>
  </div>
  <button onclick="window.print()" class="btn btn-primary" >Print</button>
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
	  
	   <script src="js1/jquery.js"></script>
  <script src="js1/Chart.min.js"></script>
<script type="text/javascript">
var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($InventoryID); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969aa",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750"
                            ],
                            data:<?php echo json_encode($InvQuantity); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
	
	<script type="text/javascript">
var ctx = document.getElementById("chartjs_bar2").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($InventoryID2); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969aa",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750"
                            ],
                            data:<?php echo json_encode($InvQuantity2); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
 

</html>