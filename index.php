<?php
session_start();

$conn = new mysqli("localhost:3307", "root", "", "onprint_");
$msg = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];

    if (!empty($username) && !empty($password)) {
        $password = sha1($password);
        $sql = "SELECT * FROM users WHERE username = ? AND password = ? AND user_type = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $password, $userType);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if ($result->num_rows == 1) {
            session_regenerate_id();
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['user_type'];
            session_write_close();

            if ($_SESSION['role'] == "admin") {
                header("location:Admin/admin.php");
            } else if ($_SESSION['role'] == "registered_user") {
                header("location:Registered User/registered_user.php");
            } else if ($_SESSION['role'] == "rider") {
                header("location:Rider/rider.php");
            }
        } else {
            $msg = "Incorrect Username or Password!!!";
        }
    } else {
        $msg = "Please enter your username and password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>On Print Login</title>
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="functions.js"></script>
</head>

<body class="bg-bright">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-5 bg-light mt-5 px-0" style="box-shadow: 10px 20px 20px -15px #000000;">
                <h3 class="text-center text-light bg-dark p-3">On Print Login</h3>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="p-4">
                    <div class="form-group">
                        <label for="username">Username</label><br>
                        <input type="text" name="username" class="form-control form-control-lg" required>
                    </div><br>
                    <div class="form-group">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" class="form-control form-control-lg" required>
                    </div><br>
                    <div class="form-group">
                        <label for="userType">User Type</label><br>
                        <select name="userType" class="form-control form-control-lg" required>
                            <option value="admin">Admin</option>
                            <option value="registered_user">Registered User</option>
                            <option value="rider">Rider</option>
                        </select>
                    </div><br>
                    <div class="form-group text-center">
                    <input type="submit" value="Login" name="login" class="btn btn-success btn-block">



                    </div>
                    <div class="form-group">
                        <p class="text-danger text-center">
                            <?= $msg ?>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>