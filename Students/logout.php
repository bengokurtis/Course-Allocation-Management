<?php
//include config for the SITEURL
include ("../db/db-connect.php");
//destroy the session 
session_destroy();//unset the  $_SESSION['user']
//direct  to our login page
header("Location:".SITEURL."index.php");
?>