<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "onpp";

  $conn = new mysqli($servername,$username,$password,$dbname);

  if($conn->connect_error) {

    die("connection Failed" . $conn->connect_error);
  }
?>