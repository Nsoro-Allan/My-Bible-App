<?php
include("sessions.php");
include("connection.php");

$chapter_id=$_GET['chapter_id'];

$delete=$con->query("DELETE FROM `chapters` WHERE `chapter_id` = '$chapter_id'");

if($delete){
    $msg="Chapter Deleted Successfully...";
}
else{
    $error_msg="Chapter Not Deleted...";
}

if(isset($msg)){
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>My - Bible App - Delete Chapter</title>
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
            window.location.href = 'chapters';
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
    <title>My - Bible App - Delete Chapter</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='shortcut icon' href='./images/icon.webp' type='image/x-icon'>
    <script src='./sweetalert.min.js'></script>
</head>
<body>
    <script>
        swal({
            title: 'Success!',
            text: '$error_msg',
            icon: 'success',
        }).then(function() {
            window.location.href = 'chapters';
        });
    </script>
</body>
</html>
";
}

?>