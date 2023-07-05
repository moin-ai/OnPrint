<!DOCTYPE html>
<html lang="en">
<head>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>sungla</title>
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
 <body class="main-layout position_head">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
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
                              <li class="nav-item active">
                                 <a class="nav-link" href="about.html">Rider</a>
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
                              <li class="nav-item d_none login_btn">
                                 <a class="nav-link" href="#">Login</a>
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
<script>
function validateForm() {
  var x = document.forms["complaintform"]["name"].value;
  var y = document.forms["complaintform"]["rider_ID"].value;
  var z = document.forms["complaintform"]["complaint_type"].value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
    return false;
  }
  if (y == "" || x == null) {
    alert("Rider ID must be filled out");
    return false;
  }
  if (z == "" || x == null) {
    alert("Complaint type must be filled out");
    return false;
  }
}

</script>
<title>File a Complaint</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="../css/layoutcss.css"> <!-- css -->

<style>
.error {color: #FF0000;}
div .table
{
  border-radius: 5px;
  background-color: white;
  padding: 20px;
}

.status
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px ;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
}
 .statuscom
{
  width: 100%;
  height: 200px;
  padding: 12px 20px;
  margin: 8px ;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
}
</style>

</head>
<body>

<?php
$error ="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
            // to make a connection with database
		$con = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
		if (mysqli_connect_errno())
               {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                } 


	        // to select the targeted database
	        mysqli_select_db($con,"ump_parcel") or die(mysqli_error());
		
	        // to create a query to be executed in sql
	        extract( $_POST );

            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
          } else {
               $name = test_input($_POST["name"]);
                 }
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
          } else {
               $rider_ID = test_input($_POST["rider_ID"]);
                 }
			if (empty($_POST["email"])) {
               $typeErr = "Complaint type is required";
          } else {
               $complaint_type = test_input($_POST["complaint_type"]);
                 }
		
			
	        $query = "INSERT INTO `complaint` (`complaint_ID`, `rider_ID`, `name`, `complaint_type`, `complaint_desc`, `complaint_status`) VALUES ('','$rider_ID','$name','$complaint_type','$complaint_desc', '$complaint_status`','Pending')";
	        // to run sql query in database
	        $result = mysqli_query($con, $query);
	     
		//Check whether the insert was successful or not
	        if($result) 
	        {
		        
                    echo('Complaint submitted');
					
		}
		else 
	        {
			        
	            die("Insert failed");
	        }
	 
	 
   
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!-- Navigation bar -->
<!-- Search bar -->
<div class="navbar">
  <div class="search-container">
  </div>
 
</div>

<!-- all buttons section -->
<div class="container" style="background-color:#FFFACD">
  <div class="row">
    <div class="column">
	<center>
		<h1 class="xlarge-font" style="color:black"><b>File a Complaint</b></h1>
	</center>
	
		<div class="table">
			<form name="complaintform" action="submitcomplaintphp.php" method="post" onsubmit="return validateForm()">
				<p>				    
					<b>Rider name:</b> <input class="status" type="text" name="name"><span class="error">* <?php if(isset($nameErr)) echo $nameErr;?></span><br><br>
					<b>Rider ID:</b> <input class="status" type="text" name="rider_ID"><span class="error">* <?php if(isset($emailErr)) echo $emailErr;?></span><br><br>
					<b>Complaint type:</b>
                               <select name="complaint_type">
							   <option value="">Select...</option>
                               <option value="Lost Item">Lost Item</option>
                               <option value="Damaged Item">Damaged Item</option>
                               </select><span class="error">* <?php if(isset($typeErr)) echo $typeErr;?></span><br><br>
					<b>Complaint description:</b> <input class="statuscom" type="text" name="complaint_desc">
				</p><br>
				<center>
			<p><input id="but" type="submit" value="Submit complaint"></p>
			<p><input id="but" type="reset" value="Reset"></p>
		        </center>
			</form>
		</div>
	</div>
  </div>
</div>
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
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   </body>
</html>
	