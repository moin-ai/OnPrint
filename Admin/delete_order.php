<?php

include "db_conn.php";

if(isset($_GET['orderID']) && !empty($_GET['orderID'])){
    $orderID = $_GET['orderID'];

    $sql = "DELETE FROM `manageOrders` WHERE orderID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $orderID);
    $result = mysqli_stmt_execute($stmt);

    if($result){
        header("Location: manage_orders.php?msg=Record deleted successfully");
    }else{
        echo "Failed: " .mysqli_error($conn);
    }
}else{
    echo "Invalid user id";
}
?>