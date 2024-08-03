<?php
include("connection.php");

// Get Book Name
$b_name=$_GET['book_name'];
$book_name=urldecode($b_name);
// Get Book Name

// Get Data
$select=$con->query("SELECT * FROM `books` WHERE `book_name` = '$book_name'");
$row=mysqli_fetch_assoc($select);
$book_id=$row['book_id'];
$book=$row['book_name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My - Bible App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./Images/icon.webp" type="image/x-icon">
</head>
<body>
<body>
    <!-- Scroll Bar Starts Here -->
    <div class="scroll-bar"></div>
    <!-- Scroll Bar Ends Here -->

    <!-- Main Container Starts Here -->
    <div class="main-container">

        <div class="header">

            <h1><a href="./home">Holy Bible</a></h1>

            <form action="search_results" method="post">

                <input type="search" name="search" placeholder="Search Bible Book...">

                <button type="submit" name="search">Search...</button>

            </form>

        </div>

        <!-- Books Container Starts Here -->

        <div class="books-container">

            <div class="title">
                <h1><?php echo $book;?></h1>
            </div>

            <div class="chapter">
                <h1>Chapter 01</h1>
            </div>

            <div class="verse">
                <p>1:1 In the beginning God created the heaven and the earth.</p>
                <p>1:1 In the beginning God created the heaven and the earth.</p>
                <p>1:1 In the beginning God created the heaven and the earth.</p>
                <p>1:1 In the beginning God created the heaven and the earth.</p>
                <p>1:1 In the beginning God created the heaven and the earth.</p>
                <p>1:1 In the beginning God created the heaven and the earth.</p>
                <p>1:1 In the beginning God created the heaven and the earth.</p>
                <p>1:1 In the beginning God created the heaven and the earth.</p>
                <p>1:1 In the beginning God created the heaven and the earth.</p>
                <p>1:1 In the beginning God created the heaven and the earth.</p>
                <p>1:1 In the beginning God created the heaven and the earth.</p>
            </div>

        </div>    

        <!-- Books Container Ends Here -->



    </div>
    <!-- Main Container Starts Here -->

</body>
</body>
</html>