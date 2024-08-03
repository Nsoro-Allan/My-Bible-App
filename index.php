<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-Bible App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./Images/icon.webp" type="image/x-icon">
</head>
<body>
    <!-- Scroll Bar Starts Here -->
    <div class="scroll-bar"></div>
    <!-- Scroll Bar Ends Here -->

    <!-- Main Container Starts Here -->
    <div class="main-container">

        <div class="header">

            <h1><a href="./home">Holy Bible</a></h1>

            <form action="" method="post">

                <input type="search" name="search" placeholder="Search Bible Book...">

                <button type="submit" name="search">Search...</button>

            </form>

        </div>

        <!-- Books Container Starts Here -->

        <div class="books-container">

            <div class="title">
                <h1>Old Testament</h1>
            </div>

            <!-- Book Card Container -->

            <div class="book-card-container">

                <?php
                $select1=$con->query("SELECT * FROM `books` WHERE `testament` = 'Old Testament'");
                if(mysqli_num_rows($select1) > 0){
                    while($row1=mysqli_fetch_assoc($select1)){
                    $book_name=$row1['book_name'];
                ?>

                    <!-- Book Card -->
                    <div class="book-card"><a href="./book?book_name=<?php echo urlencode($book_name);?>"><?php echo $book_name;?></a></div>
                    <!-- Book Card -->

                <?php  
                }
                }
                else{
                    echo"<center><h1>No Old Testament Books Found...</h1></center>";
                }
                ?>

            </div>

            <div class="title">
                <h1>New Testament</h1>
            </div>

            <div class="book-card-container">

                <?php
                $select2=$con->query("SELECT * FROM `books` WHERE `testament` = 'New Testament'");
                if(mysqli_num_rows($select2) > 0){
                    while($row2=mysqli_fetch_assoc($select2)){
                    $book_name=$row2['book_name'];
                ?>

                    <!-- Book Card -->
                    <div class="book-card"><a href="./book?book_name=<?php echo urlencode($book_name);?>"><?php echo $book_name;?></a></div>
                    <!-- Book Card -->

                <?php  
                }
                }
                else{
                    echo"<center><h1>No New Testament Books Found...</h1></center>";
                }
                ?>

            </div>

        </div>

        <!-- Books Container Ends Here -->

    </div>
    <!-- Main Container Starts Here -->

</body>
</html>
