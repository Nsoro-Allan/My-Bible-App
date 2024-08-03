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
                <h1>[My-Bible App] - Chapters</h1>
            </div>

            <div class="content">

                <div class="buttons">
                    <a href="#">Add New Chapter...</a>
                </div>

                <table>

                    <tr>
                        <th>#</th>
                        <th>Book Name</th>
                        <th>Chapter Number</th>
                        <th>Actions</th>
                    </tr>

                    <?php
                    $select=$con->query("SELECT * FROM `chapters`");
                    if(mysqli_num_rows($select)>0){
                    while($row=mysqli_fetch_assoc($select)){
                        $chapter_id=$row['chapter_id']; 
                        $book_name=$row['book_name']; 
                        $chapter_number=$row['chapter_number']; 
                    ?>

                    <tr>
                        <td><?php echo $chapter_id; ?></td>
                        <td><?php echo $book_name; ?></td>
                        <td><?php echo $chapter_number; ?></td>
                        <td><a href="./delete_chapter.php?chapter_id=<?php echo $chapter_id; ?>">Delete Chapter</a></td>
                    </tr>

                    <?php 
                    }
                    }
                    else{
                        echo "<td colspan='4'><h1>No Chapters Found...</h1></td>";
                    }
                    ?>


                </table>

            </div>

        </div>
        <!-- Container Ends Here -->

    </div>
</body>
</html>