<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="functions/admin_functions.js"></script> -->
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- -----------Header----------- -->
    <div class="nav-container">
        <a href="admin.php"><img id="logo" src="onp logo.png" alt="Logo"></a>
        <nav>
            <a href="admin.php">HOME</a>
            <a href="#">USER</a>
            <a href="manage_orders.php">ORDER</a>
            <a href="#">PAYMENT</a>
            <a href="#">APPROVAL</a>
            <a href="#">ADMINISTRATION</a>
            <a href="../index.php">LOGOUT</a>
            
            <div id="indicator"></div>


        </nav>
    </div>
    <!-- -----------Header----------- -->

    <div class="title title-light justify-content-center fs-3 mb-5" style="background-color:aquamarine;">
        <h1>
            <center>MANAGE ORDERS</center>
        </h1>
    </div>

    <div class="container">
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
           ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }

        ?>
        <a href="add_order.php" class="btn btn-dark mb-3">ADD ORDER</a>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">PDF NO</th>
                    <th scope="col">Delivery Location</th>
                    <th scope="col">Edit / Delete</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include "db_conn.php";
                $sql = "SELECT * FROM 'manageOrders'";
                $result = mysqli_query($conn, "SELECT * FROM `manageOrders`");
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['orderID'] ?></td>
                        <td><?php echo $row['userID'] ?></td>
                        <td><?php echo $row['U_name'] ?></td>
                        <td><?php echo $row['U_address'] ?></td>
                        <td><?php echo $row['orderDate'] ?></td>
                        <td><?php echo $row['pdfNO'] ?></td>
                        <td><?php echo $row['deliveryLocation'] ?></td>
                       

                        <td>
                            <a href="edit_order.php?orderID=<?php echo $row['orderID'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square
        fs-5 me-3"></i></a>
                            <a href="delete_order.php?orderID=<?php echo $row['orderID'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

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
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>