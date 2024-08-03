<div class="sidebar">

    <div class="top">
        <img src="./Images/icon.webp" alt="">
        <h1>[My-Bible App]</h1>
    </div>

    <div class="middle">
        <a href="./dashboard.php">Dashboard</a>
        <a href="./books.php">Books</a>
        <a href="./chapters.php">Chapters</a>
        <a href="./verses.php">Verses</a>
        <a href="./account_settings.php">Account Settings</a>
    </div>

    <div class="bottom">
        <h4><?php echo $_SESSION['admin_user'];?></h4>
        <a href="./logout.php">Logout</a>
    </div>

</div>