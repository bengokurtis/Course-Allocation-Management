<?php
if(!isset($_SESSION['user-admin'])){
    $_SESSION['Not-a-user'] = "Please login to access Admin Panel";
    header('location:'.SITEURL.'admin/index.php');
}

?>