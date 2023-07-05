<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] != "admin") {
	header("location:../index.php");
}
include "../db_conn.php";

$data = array();

$sql = "SELECT COUNT(userID) as count, city.CityName, state.StateName FROM registered_user 
                JOIN city ON registered_user.City_ID = city.City_ID
                JOIN state ON registered_user.State_ID = state.State_ID
                GROUP BY registered_user.City_ID, registered_user.State_ID";

$result = mysqli_query($conn, $sql);
if (!$result) {
	die("Error: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
	$data[] = array(
		"label" => $row['CityName'] . ", " . $row['StateName'],
		"data" => $row['count']
	);
}

echo json_encode($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
	</head>
	
<body>
<canvas id="myChart" width="400" height="400">
<script>
$(document).ready(function(){
        var ctx = document.getElementById("myChart").getContext("2d");
        var myChart;

        $.ajax({
            url: "user_report.php",
            method: "GET",
            success: function(data){
                console.log(data);
                var city = [];
                var count = [];

                for(var i in data) {
                    city.push(data[i].label);
                    count.push(data[i].data);
                }

                myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: city,
                        datasets: [{
                            label: 'Users per City and State',
                            data: count,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            },
            error: function(data){
                console.log(data);
            }
        });
    });

</script>
	</body>

</html>