<?php
include("connection.php");

// Search Starts Here
if(isset($_POST['search'])){
    $search_value=mysqli_real_escape_string($con, $_POST['search_value']);
    header("Location: search_results?query=$search_value");
}
// Search Ends Here

// Get Book Name
$b_name = $_GET['book_name'];
$book_name = urldecode($b_name);

// Get Book Data
$select = $con->query("SELECT * FROM `books` WHERE `book_name` = '$book_name'");
$row = mysqli_fetch_assoc($select);
$book_id = $row['book_id'];
$book = $row['book_name'];

// Get Chapters and Verses
$chapters_query = $con->query("SELECT * FROM `chapters` WHERE `book_id` = '$book_id' ORDER BY `chapter_number`");
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
    <!-- Loader Starts Here -->
    <?php
        include("loader.php");
    ?>
    <!-- Loader Ends Here -->
    <!-- Scroll Bar Starts Here -->
    <div class="scroll-bar"></div>
    <!-- Scroll Bar Ends Here -->

    <!-- Main Container Starts Here -->
    <div class="main-container">

        <div class="header">

            <img src="./Images/icon.webp" alt="Icon">
            <h1><a href="./bible">Holy Bible</a></h1>
            
            <form action="" method="POST">

                <input type="search" name="search_value" placeholder="Search Bible Book..." required>

                <button type="submit" name="search">Search...</button>

            </form>

        </div>

        <!-- Books Container Starts Here -->
        <div class="books-container">
            <div class="title">
                <h1><?php echo htmlspecialchars($book); ?></h1>
            </div>

            <?php
            if (mysqli_num_rows($chapters_query) > 0) {
                while ($chapter_row = mysqli_fetch_assoc($chapters_query)) {
                    $chapter_id = $chapter_row['chapter_id'];
                    $chapter_number = $chapter_row['chapter_number'];
                    
                    echo '<div class="chapter">';
                    echo '<h1>Chapter ' . str_pad($chapter_number, 2, '0', STR_PAD_LEFT) . '</h1>';
                    echo '</div>';

                    // Get Verses for Each Chapter
                    $verses_query = $con->query("SELECT * FROM `verses` WHERE `chapter_id` = '$chapter_id' ORDER BY `verse_number`");
                    
                    echo '<div class="verse">';
                    if (mysqli_num_rows($verses_query) > 0) {
                        while ($verse_row = mysqli_fetch_assoc($verses_query)) {
                            $verse_number = $verse_row['verse_number'];
                            $text = $verse_row['text'];
                            
                            echo '<p>' . str_pad($chapter_number, 2, '0', STR_PAD_LEFT) . ':' . str_pad($verse_number, 2, '0', STR_PAD_LEFT) . ' ' . htmlspecialchars($text) . '</p>';
                        }
                    } else {
                        echo '<p>No verses found for this chapter.</p>';
                    }
                    echo '</div>';
                }
            } else {
                echo '<center><h1>No chapters found for this book...</h1></center>';
            }
            ?>
        </div>    
        <!-- Books Container Ends Here -->

    </div>
    <!-- Main Container Ends Here -->

</body>
</html>
