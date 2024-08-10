<?php
include("sessions.php");
include("connection.php");

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
                <h1>[My-Bible App] - Books</h1>
            </div>

            <div class="content">

                <div class="buttons">
                    <a href="./add_book">Add New Book...</a>
                </div>

                <table>

                    <tr>
                        <th>#</th>
                        <th>Book Name</th>
                        <th>Testament</th>
                        <th>Actions</th>
                    </tr>

                    <?php
                    $select=$con->query("SELECT * FROM `books`");
                    if(mysqli_num_rows($select)>0){
                    while($row=mysqli_fetch_assoc($select)){
                        $book_id=$row['book_id']; 
                        $book_name=$row['book_name']; 
                        $testament=$row['testament']; 
                    ?>

                    <tr>
                        <td><?php echo $book_id; ?></td>
                        <td><?php echo $book_name; ?></td>
                        <td><?php echo $testament; ?></td>
                        <td><a href="./delete_book?book_id=<?php echo $book_id; ?>">Delete Book</a></td>
                    </tr>

                    <?php 
                    }
                    }
                    else{
                        echo "<td colspan='4'><h1>No Books Found...</h1></td>";
                    }
                    ?>


                </table>

            </div>

        </div>
        <!-- Container Ends Here -->

    </div>
</body>
</html>