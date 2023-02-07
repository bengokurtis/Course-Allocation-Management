<?php
if(!isset($_SESSION['user-student'])){
    $_SESSION['Not-a-user'] = "Please login to access Student Panel";
    header('location:dashboard.php');
}

?>