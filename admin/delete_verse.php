<?php
include("sessions.php");
include("connection.php");

$verse_id=$_GET['verse_id'];

$delete=$con->query("DELETE FROM `verses` WHERE `verse_id` = '$verse_id'");

if($delete){
    $msg="Verse Deleted Successfully...";
}
else{
    $error_msg="Verse Not Deleted...";
}

if(isset($msg)){
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>My - Bible App - Delete Verse</title>
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
            window.location.href = 'verses';
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
    <title>My - Bible App - Delete Verse</title>
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
            window.location.href = 'verses';
        });
    </script>
</body>
</html>
";
}

?>