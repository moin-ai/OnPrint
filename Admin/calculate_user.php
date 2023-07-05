<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] != "admin") {
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Page level plugin CSS-->
	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
</head>

<body class="body-with-footer">

	<!-- -----------Header----------- -->
	<div class="nav-container">
		<a href="index.php"><img id="logo" src="../media/onp logo.png" alt="Logo"></a>
		<nav>
			<a href="admin.php">HOME</a>
			<a href="#">USER</a>
			<a href="#">ORDER</a>
			<a href="#">PAYMENT</a>
			<a href="#">APPROVAL</a>
			<a href="#">ADMINISTRATION</a>
			<a class="logout" href="../logout.php">LOGOUT</a>
			<div id="indicator"></div>


		</nav>
	</div>
	<!-- -----------Header----------- -->


<div class="body-container d-flex">
    <div class="welcome">
        <h4>Welcome : <?=$_SESSION['username'] ?></h4>
    </div>
    <div class="buttons d-flex flex-nowrap">
        <button class="btn btn-primary" onclick="window.location.href='manage_users.php'">Manage Users</button>
        <button class="btn btn-primary" onclick="window.location.href='manage_riders.php'">Manage Riders</button>
        <button class="btn btn-primary" onclick="window.location.href='calculate_user.php'">Calculation</button>
        <button class="btn btn-primary" onclick="window.location.href='user_report.php'">Report</button>
    </div>
</div>


<?php
include "../db_conn.php";
    //the SQL query to be executed
    $query = "SELECT * FROM registered_user";
    //storing the result of the executed query
    $result = $conn->query($query);
?>

<table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col">Number of Users</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../db_conn.php";
				$sql = "SELECT COUNT(userID) as count, city.CityName, state.StateName FROM registered_user
				JOIN city ON registered_user.City_ID = city.City_ID
				JOIN state ON registered_user.State_ID = state.State_ID
				GROUP BY registered_user.City_ID, registered_user.State_ID";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['CityName'] ?></td>
                        <td><?php echo $row['StateName'] ?></td>
                        <td><?php echo $row['count'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
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