<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

			 <div class="card">
                            <div class="card-body">
                                
								<a class="btn btn-primary" href="/onprint/indexnew.php" role="button">New Data</a>

								
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
											 <th>Commission ID</th>
                                                <th>Delivery ID</th>
                                                <th>Commission Rate</th>
                                                <th>Commission Date</th>
												   <th>Action</th>
												  
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
											 <th>Commission ID</th>
                                                <th>Delivery ID</th>
                                                <th>Commission Rate</th>
                                                <th>Commission Date</th>
												   <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
										
                                           
                                               	<?php
			
			
			//create connection
			$con = new mysqli("localhost", "root", "", "onprint");
			
			if ($con->connect_error){
				die("Connection failed: ". $connection->connect_error);
			}
			
			$sql="SELECT * FROM commission";
			$result = $con->query($sql);
			
			if (!$result){
				die("Invalid query: ". $connection->error);
			}
			
			while($row = $result->fetch_assoc()){
				echo"
				<tr>
			<td>$row[C_ID]</td>
				<td>$row[DeliveryID]</td>
				<td>$row[C_rate]</td>
				<td>$row[C_date]</td>
				<td>
					<a class='btn btn-primary btn-sm' href='/onprint/upt_comm_new.php?upt_comm=$row[C_ID]'>Edit</a>
					<a class='btn btn-primary btn-sm' href='/onprint/del_comm.php?del_comm=$row[C_ID]'>Delete</a>

				</td>
			</tr>
				";
			}
			
			
			?>

                                            
                                           
                                 
                                                        
                                                            
                                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
      <script>
      </script>
</body>
</html>