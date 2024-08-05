<?php
include("sessions.php");
include("connection.php");

// Get Name
$name = $_SESSION['admin_user'];

// Select Data
$select = $con->query("SELECT * FROM `admin` WHERE `username` = '$name'");
$get=mysqli_fetch_assoc($select);

$username=$get['username'];
$password=$get['password'];

// Update Data
if(isset($_POST['update_account'])){

$username=mysqli_real_escape_string($con, $_POST['username']);
$password=mysqli_real_escape_string($con, $_POST['password']);

$update = $con->query("UPDATE `admin` SET `username` = '$username', `password` = '$password' WHERE `username` = '$name'");

if($update){
    $_SESSION['admin_user']=$username;
    $msg="Updated Account Successfully...";
}
else{
    $error_msg="Failed to Update Account...";
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

    <div class="dashboard-container">

        <!-- Sidebar Starts Here -->
        <?php include("sidebar.php");?>
        <!-- Sidebar Ends Here -->

        <!-- Container Starts Here -->
        <div class="container">

            <div class="title">
                <h1>[My-Bible App] - Account Settings</h1>
            </div>

            <div class="content">
                
            <form action="" method="post">

            <label>Current Admin Username:</label>
            <input type="text" name="username" value="<?php echo $username;?>" required>

            <label>Current Admin Password:</label>
            <input type="text" name="password" value="<?php echo $password;?>" required>

            <button type="submit" name="update_account">Update Account...</button>

            </form>

            </div>

        </div>
        <!-- Container Ends Here -->

    </div>
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
                window.location.href = 'account_settings.php';
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
        window.location.href = 'account_settings.php';
    });
    </script>";
}
?>
