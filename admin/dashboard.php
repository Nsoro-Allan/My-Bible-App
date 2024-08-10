<?php
include("sessions.php");
include("connection.php");
include("total_calculations.php");
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
                <h1>[My-Bible App] - Dashboard</h1>
            </div>

            <div class="content">

                <div class="dashboard-card-container">

                    <div class="dashboard-card">
                        <img src="./Images/icon.webp" alt="Icon">
                        <h4>Total Books:</h4>
                        <a href="./books"><?php echo number_format($total_books);?></a>
                    </div>

                    <div class="dashboard-card">
                        <img src="./Images/icon.webp" alt="Icon">
                        <h4>Total Chapters:</h4>
                        <a href="./chapters"><?php echo  number_format($total_chapters);?></a>
                    </div>

                    <div class="dashboard-card">
                        <img src="./Images/icon.webp" alt="Icon">
                        <h4>Total Verses:</h4>
                        <a href="./verses"><?php echo  number_format($total_verses);?></a>
                    </div>

                </div>

            </div>

        </div>
        <!-- Container Ends Here -->

    </div>
</body>
</html>