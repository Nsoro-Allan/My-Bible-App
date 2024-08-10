<?php
include("sessions.php");
include("connection.php");

if(isset($_POST['add_chapter'])){
    $book_id=$_POST['book_id'];
    $chapter_number=$_POST['chapter_number'];

    $add_chapter=$con->query("INSERT INTO `chapters`(`chapter_id`,`book_id`,`chapter_number`) VALUES ('','$book_id','$chapter_number')");

    if($add_chapter){
        $msg="Chapter Added Successfully...";
    }
    else{
        $error_msg="Chapter Not Added...";
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
                <h1>[My-Bible App] - Add Chapter</h1>
            </div>

            <div class="content">

            <form action="" method="post">

                <label>Book:</label>
                <select name="book_id">
                    <option>Select Bible Book</option>

                    <option disabled>Old Testament</option>
                    <?php
                    $select=$con->query("SELECT * FROM `books` WHERE `testament` = 'Old Testament'");
                    while($row=mysqli_fetch_assoc($select)){
                        $book_id=$row['book_id'];
                        $book_name=$row['book_name'];
                    ?>
                        <option value='<?php echo $book_id;?>'><?php echo $book_name;?></option>
                    <?php    
                    }
                    ?>

                    <option disabled>New Testament</option>
                    <?php
                    $select=$con->query("SELECT * FROM `books` WHERE `testament` = 'New Testament'");
                    while($row=mysqli_fetch_assoc($select)){
                        $book_id=$row['book_id'];
                        $book_name=$row['book_name'];
                    ?>
                        <option value='<?php echo $book_id;?>'><?php echo $book_name;?></option>
                    <?php    
                    }
                    ?>  
                </select>

                <label>Chapter Number:</label>
                <input type="number" name="chapter_number" placeholder="Enter your chapter number..." required>

                <button type="submit" name="add_chapter">Add New Chapter..</button>

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
                window.location.href = 'chapters';
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
        window.location.href = 'add_chapter';
    });
    </script>";
}
?>