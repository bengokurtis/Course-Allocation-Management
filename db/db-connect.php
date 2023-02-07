<?php
session_start();
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
define('SITEURL','http://localhost/Course-Allocation-Management/');
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Course-Allocation-Management";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}


?>