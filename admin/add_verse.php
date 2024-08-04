<?php
include("sessions.php");
include("connection.php");

if(isset($_POST['add_verse'])){
    $chapter_id=$_POST['chapter_id'];
    $verse_number=$_POST['verse_number'];
    $text=mysqli_real_escape_string($con, $_POST['text']);

    $add_verse=$con->query("INSERT INTO `verses`(`verse_id`, `chapter_id`, `verse_number`, `text`) VALUES ('','$chapter_id','$verse_number','$text')");

    if($add_verse){
        $msg="Verse Added Successfully...";
    }
    else{
        $error_msg="Verse Not Added...";
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
                <h1>[My-Bible App] - Add Verse</h1>
            </div>

            <div class="content">

            <form action="" method="post">

                <label>Chapter:</label>
                <select name="chapter_id">
                    <option>Select Bible Book</option>
                    <?php
                    $select=$con->query("SELECT * FROM `chapters`");
                    while($row=mysqli_fetch_assoc($select)){
                        $chapter_id=$row['chapter_id'];
                        $book_id=$row['book_id'];
                        $chapter_number=$row['chapter_number'];

                     $select1=$con->query("SELECT * FROM `books` WHERE `book_id`='$book_id'");
                     while($row1=mysqli_fetch_assoc($select1)){
                        $book_name=$row1['book_name'];                
                    ?>
                        <option value='<?php echo $chapter_id;?>'><?php echo $book_name;?>, Chapter: <?php echo $chapter_number;?></option>
                    <?php 
                    }   
                    }
                    ?>
                </select>

                <label>Verse Number:</label>
                <input type="number" name="chapter_number" placeholder="Enter your chapter number..." required>

                <label>Verse Text:</label>
                <textarea name="text" placeholder="Enter your verse text..."></textarea>

                <button type="submit" name="add_verse">Add New Verse..</button>

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
                window.location.href = 'chapters.php';
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
        window.location.href = 'add_chapter.php';
    });
    </script>";
}
?>