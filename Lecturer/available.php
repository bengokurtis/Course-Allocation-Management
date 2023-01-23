<?php
include"../db/db-connect.php";


$id = $_GET['id'];
$sql = "SELECT units.id,units.unit_code,units.unit_name,units.year,units.term,units.credit_hours,courses.course_name FROM units INNER JOIN courses on units.course_id = courses.id WHERE units.id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($result){
    $unit_name = $row['unit_name'];
    $unit_code = $row['unit_code'];
    $course_name = $row['course_name'];
    $duration = $row['credit_hours'];
    $year = $row['year'];
    $term = $row['term'];
    $lecname = $_SESSION['user'];
    $sql2 = "INSERT INTO booked_units (unit_name,unit_code,course_name,duration,year,term,lecturer) VALUES ('$unit_name','$unit_code','$course_name','$duration','$year','$term','$lecname')";
    $result2 = mysqli_query($conn,$sql2);
    if($result2){
      $_SESSION['booked'] = "Unit Booked Successfully";
      header("location:".SITEURL."Lecturer/Availability.php");
       
    }else{
      $_SESSION['booked'] = "Unit Not Booked";
      header("location:".SITEURL."Lecturer/Availability.php");
       
}
}
?>
