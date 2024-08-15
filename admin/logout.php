<?php
include("sessions.php");
session_destroy();
unset($_SESSION['admin_user']);

$msg="Logged Out Successfully...";

echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Bible App - Logout</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='shortcut icon' href='./images/icon.webp' type='image/x-icon'>
    <script src='./sweetalert.min.js'></script>
</head>
<body>
    <script>
        swal({
            title: 'Success!',
            text: '$msg',
            icon: 'success',
        }).then(function() {
            window.location.href = 'login';
        });
    </script>
</body>
</html>
";
?>