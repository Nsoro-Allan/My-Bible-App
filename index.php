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

            <h1>Holy Bible</h1>

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

                <!-- Book Card -->
                <div class="book-card"><a href="#">Genesis</a></div>
                <div class="book-card"><a href="#">Exodus</a></div>
                <div class="book-card"><a href="#">Leviticus</a></div>
                <div class="book-card"><a href="#">Numbers</a></div>
                <div class="book-card"><a href="#">Deuteronomy</a></div>
                <div class="book-card"><a href="#">Joshua</a></div>
                <div class="book-card"><a href="#">Judges</a></div>
                <div class="book-card"><a href="#">Ruth</a></div>
                <div class="book-card"><a href="#">1 Samuel</a></div>
                <div class="book-card"><a href="#">2 Samuel</a></div>
                <div class="book-card"><a href="#">1 Kings</a></div>
                <div class="book-card"><a href="#">2 Kings</a></div>
                <div class="book-card"><a href="#">1 Chronicles</a></div>
                <div class="book-card"><a href="#">2 Chronicles</a></div>
                <div class="book-card"><a href="#">Ezra</a></div>
                <div class="book-card"><a href="#">Nehemiah</a></div>
                <div class="book-card"><a href="#">Esther</a></div>
                <div class="book-card"><a href="#">Job</a></div>
                <div class="book-card"><a href="#">Psalms</a></div>
                <div class="book-card"><a href="#">Proverbs</a></div>
                <div class="book-card"><a href="#">Ecclesiastes</a></div>
                <div class="book-card"><a href="#">Song of Solomon</a></div>
                <div class="book-card"><a href="#">Isaiah</a></div>
                <div class="book-card"><a href="#">Jeremiah</a></div>
                <div class="book-card"><a href="#">Lamentations</a></div>
                <div class="book-card"><a href="#">Ezekiel</a></div>
                <div class="book-card"><a href="#">Daniel</a></div>
                <div class="book-card"><a href="#">Hosea</a></div>
                <div class="book-card"><a href="#">Joel</a></div>
                <div class="book-card"><a href="#">Amos</a></div>
                <div class="book-card"><a href="#">Obadiah</a></div>
                <div class="book-card"><a href="#">Jonah</a></div>
                <div class="book-card"><a href="#">Micah</a></div>
                <div class="book-card"><a href="#">Nahum</a></div>
                <div class="book-card"><a href="#">Habakkuk</a></div>
                <div class="book-card"><a href="#">Zephaniah</a></div>
                <div class="book-card"><a href="#">Haggai</a></div>
                <div class="book-card"><a href="#">Zechariah</a></div>
                <div class="book-card"><a href="#">Malachi</a></div>

            </div>

            <div class="title">
                <h1>New Testament</h1>
            </div>

            <div class="book-card-container">

                <!-- Book Card -->
                <div class="book-card"><a href="#">Matthew</a></div>
                <div class="book-card"><a href="#">Mark</a></div>
                <div class="book-card"><a href="#">Luke</a></div>
                <div class="book-card"><a href="#">John</a></div>
                <div class="book-card"><a href="#">Acts</a></div>
                <div class="book-card"><a href="#">Romans</a></div>
                <div class="book-card"><a href="#">1 Corinthians</a></div>
                <div class="book-card"><a href="#">2 Corinthians</a></div>
                <div class="book-card"><a href="#">Galatians</a></div>
                <div class="book-card"><a href="#">Ephesians</a></div>
                <div class="book-card"><a href="#">Philippians</a></div>
                <div class="book-card"><a href="#">Colossians</a></div>
                <div class="book-card"><a href="#">1 Thessalonians</a></div>
                <div class="book-card"><a href="#">2 Thessalonians</a></div>
                <div class="book-card"><a href="#">1 Timothy</a></div>
                <div class="book-card"><a href="#">2 Timothy</a></div>
                <div class="book-card"><a href="#">Titus</a></div>
                <div class="book-card"><a href="#">Philemon</a></div>
                <div class="book-card"><a href="#">Hebrews</a></div>
                <div class="book-card"><a href="#">James</a></div>
                <div class="book-card"><a href="#">1 Peter</a></div>
                <div class="book-card"><a href="#">2 Peter</a></div>
                <div class="book-card"><a href="#">1 John</a></div>
                <div class="book-card"><a href="#">2 John</a></div>
                <div class="book-card"><a href="#">3 John</a></div>
                <div class="book-card"><a href="#">Jude</a></div>
                <div class="book-card"><a href="#">Revelation</a></div>

            </div>

        </div>

        <!-- Books Container Ends Here -->

    </div>
    <!-- Main Container Starts Here -->

</body>
</html>
