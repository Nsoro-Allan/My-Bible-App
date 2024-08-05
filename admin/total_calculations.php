<?php
include("connection.php");

// Total Books
$select=$con->query("SELECT COUNT(*) AS `total_books` FROM `books`");
$row=mysqli_fetch_assoc($select);
$total_books=$row['total_books'];

// Total Chapters
$select=$con->query("SELECT COUNT(*) AS `total_chapters` FROM `chapters`");
$row=mysqli_fetch_assoc($select);
$total_chapters=$row['total_chapters'];

// Total Verses
$select=$con->query("SELECT COUNT(*) AS `total_verses` FROM `verses`");
$row=mysqli_fetch_assoc($select);
$total_verses=$row['total_verses'];


?>