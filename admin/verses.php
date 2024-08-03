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
                <h1>[My-Bible App] - Verses</h1>
            </div>

            <div class="content">

                <div class="buttons">
                    <a href="#">Add New Verse...</a>
                </div>

                <table>

                    <tr>
                        <th>#</th>
                        <th>Chapter Number</th>
                        <th>Verse Number</th>
                        <th>Verse Text</th>
                        <th>Actions</th>
                    </tr>   

                    <?php
                    $select=$con->query("SELECT * FROM `verses`");
                    if(mysqli_num_rows($select)>0){
                    while($row=mysqli_fetch_assoc($select)){
                        $verse_id=$row['verse_id']; 
                        $chapter_id=$row['chapter_id']; 
                        $verse_number=$row['verse_number']; 
                        $text=$row['text']; 
                    ?>

                    <tr>
                        <td><?php echo $verse_id; ?></td>
                        <td><?php echo $chapter_id; ?></td>
                        <td><?php echo $verse_number; ?></td>
                        <td><textarea readonly><?php echo $verse_number; ?></textarea></td>
                        <td><a href="./delete_verse.php?verse_id=<?php echo $verse_id; ?>">Delete Verse</a></td>
                    </tr>

                    <?php 
                    }
                    }
                    else{
                        echo "<td colspan='5'><h1>No Verses Found...</h1></td>";
                    }
                    ?>


                </table>

            </div>

        </div>
        <!-- Container Ends Here -->

    </div>
</body>
</html>