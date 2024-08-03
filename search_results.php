<?php
include("connection.php");

$search_query = "";
if (isset($_GET['query'])) {
    $search_query = $_GET['query'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results - My-Bible App</title>
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

            <form action="search_results" method="get">
                <input type="search" name="query" placeholder="Search Bible Book..." value="<?php echo htmlspecialchars($search_query); ?>" required>
                <button type="submit">Search...</button>
            </form>
        </div>

        
        <div class="books-container">

            <div class="title">
                <h1>Search Results for "<?php echo htmlspecialchars($search_query); ?>"</h1>
            </div>

            <!-- Book Card Container -->

            <div class="book-card-container">


            <?php
            if (!empty($search_query)) {
                $search_query = $con->real_escape_string($search_query);
                $select = $con->query("SELECT * FROM `books` WHERE `book_name` LIKE '%$search_query%'");

                if (mysqli_num_rows($select) > 0) {
                    echo '<div class="book-card-container">';
                    while ($row = mysqli_fetch_assoc($select)) {
                        $book_name = $row['book_name'];
                        ?>
                        <!-- Book Card -->
                        <div class="book-card">
                            <a href="./book?book_name=<?php echo urlencode($book_name);?>">
                                <?php echo $book_name;?>
                            </a>
                        </div>
                        <!-- Book Card -->
                        <?php
                    }
                    echo '</div>';
                } else {
                    echo "<center><h1 style='font-size: 3rem;'>No Book Found...</h1></center>";
                }
            } else {
                echo "<center><h1>Please enter a search query.</h1></center>";
            }
            ?>
        </div>
        </div>
        <!-- Search Results Container Ends Here -->

    </div>
    <!-- Main Container Ends Here -->

</body>
</html>
