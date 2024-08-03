<?php
include("sessions.php");
include("connection.php");

if(isset($_POST['add_book'])){
    $book_name=mysqli_real_escape_string($con, $_POST['book_name']);

    $add_book=$con->query("INSERT INTO `books`(`book_id`,`book_name`) VALUES ('','$book_name')");

    if($add_book){
        $msg="Book Added Successfully...";
    }
    else{
        $error_msg="Book Not Added...";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-Bible App</title>
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
                <h1>[My-Bible App] - Add Book</h1>
            </div>

            <div class="content">

            <form action="" method="post">

                <label>Book Name:</label>
                <input type="text" name="book_name" placeholder="Enter your book name..." required>

                <button type="submit" name="add_book">Add New Book..</button>

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
                window.location.href = 'books.php';
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
        window.location.href = 'add_book.php';
    });
    </script>";
}
?>