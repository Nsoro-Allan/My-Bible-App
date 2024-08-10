<?php
include("sessions.php");
include("connection.php");

$book_id=$_GET['book_id'];

$delete=$con->query("DELETE FROM `books` WHERE `book_id` = '$book_id'");

if($delete){
    $msg="Book Deleted Successfully...";
}
else{
    $error_msg="Book Not Deleted...";
}

if(isset($msg)){
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>AC - Shop - Delete Book</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='shortcut icon' href='./images/logo.ico' type='image/x-icon'>
    <script src='./sweetalert.min.js'></script>
</head>
<body>
    <script>
        swal({
            title: 'Success!',
            text: '$msg',
            icon: 'success',
        }).then(function() {
            window.location.href = 'books';
        });
    </script>
</body>
</html>
";
}

else if(isset($error_msg)){
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>AC - Shop - Delete Book</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='shortcut icon' href='./images/logo.ico' type='image/x-icon'>
    <script src='./sweetalert.min.js'></script>
</head>
<body>
    <script>
        swal({
            title: 'Success!',
            text: '$error_msg',
            icon: 'success',
        }).then(function() {
            window.location.href = 'books';
        });
    </script>
</body>
</html>
";
}

?>