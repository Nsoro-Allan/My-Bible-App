<?php
session_start();
if(!isset($_SESSION['admin_user'])){
    $msg="Login First...";
}


?>