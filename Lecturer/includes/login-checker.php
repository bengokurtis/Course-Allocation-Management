<?php
if(!isset($_SESSION['user-lec'])){
    $_SESSION['Not-a-user'] = "Please login to access Lecturer Panel";
    header('location:'.SITEURL.'Lecturer/index.php');
}

?>