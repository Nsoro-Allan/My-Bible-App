<?php
session_start();
include("connection.php");

if(isset($_POST['login'])){
    $username=mysqli_real_escape_string($con, $_POST['username']);
    $password=mysqli_real_escape_string($con, $_POST['password']);

    $login=$con->query("SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'");

    if($row=$login->fetch_assoc()){
        $_SESSION['admin_user']=$username;
        $msg="You Have Successfully Logged In...";
    }
    else{
        $error_msg="Invalid Username or Password...";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My - Bible App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./Images/icon.webp" type="image/x-icon">
    <script src="./sweetalert.min.js"></script>
</head>
<body>
    <!-- Loader Starts Here -->
    <?php
        include("loader.php");
    ?>
    <!-- Loader Ends Here -->
    <!-- Form Container Starts Here -->

    <div class="form-container">

        <div class="form-left">
            <h1>[My-Bible App]</h1>
        </div>

        <div class="form-right">

            <div class="title">
                <img src="./Images/icon.webp" alt="">
                <h1>Admin - Login</h1>
            </div>

            <form action="" method="post">

                <label>Username:</label>
                <input type="text" name="username" placeholder="Enter your username..." required>

                <label>Password:</label>
                <input type="password" name="password" placeholder="Enter your password..." required>

                <button type="submit" name="login">Login Here...</button>

            </form>

        </div>

    </div>

    <!-- Form Container Ends Here -->

</body>
</html>

<?php
if(isset($msg)){
    echo "<script>
            swal({
                title: 'Success!',
                text: '$msg',
                icon: 'success',
            }).then(function() {
                window.location.href = 'dashboard.php';
            });
    </script>";
}
elseif(isset($error_msg)){
    echo "<script>
    swal({
        title: 'Error!',
        text: '$error_msg',
        icon: 'error',
    }).then(function() {
        window.location.href = 'index.php';
    });
    </script>";
}
?>
