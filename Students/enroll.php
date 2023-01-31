<?php
include "../db/db-connect.php";


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
     $studentname = $_SESSION['user'];
    $sql2 = "INSERT INTO student_enroll_tbl (unit_name,unit_code,course_name,duration,year,term,student) VALUES ('$unit_name','$unit_code','$course_name','$duration','$year','$term','$studentname')";
    $result2 = mysqli_query($conn,$sql2);
    if($result2){
     $_SESSION['enroll'] = "Enrolled successfully";
      header("location:".SITEURL."Students/BookUnits.php");
       
    }else{
       $_SESSION['enroll'] = "Not enrolled";
      header("location:".SITEURL."Students/BookUnits.php");
       
}
}
?>
