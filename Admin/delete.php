<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['role']!="admin"){
    header("location:../index.php");
}
include "../db_conn.php";

if(isset($_GET['userID']) && !empty($_GET['userID'])){
    $userID = $_GET['userID'];

    $sql = "DELETE FROM `registered_user` WHERE userID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $userID);
    $result = mysqli_stmt_execute($stmt);

    if($result){
        header("Location: manage_users.php?msg=Record deleted successfully!!!");
    }else{
        echo "Failed: " .mysqli_error($conn);
    }
}else{
    echo "Invalid user id";
}
?>
