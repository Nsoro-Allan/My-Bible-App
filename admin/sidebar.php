<!-- Loader Starts Here -->
<?php
    include("loader.php");
?>
<!-- Loader Ends Here -->
<script src="./sweetalert.min.js"></script>
<div class="sidebar">

    <div class="top">
        <img src="./Images/icon.webp" alt="">
        <h1>[My-Bible App]</h1>
    </div>

    <div class="middle">
        <a href="./dashboard">Dashboard</a>
        <a href="./books">Books</a>
        <a href="./chapters">Chapters</a>
        <a href="./verses">Verses</a>
        <a href="./account_settings">Account Settings</a>
    </div>

    <div class="bottom">
        <h4><?php echo $_SESSION['admin_user'];?></h4>
        <a href="./logout">Logout</a>
    </div>

</div>