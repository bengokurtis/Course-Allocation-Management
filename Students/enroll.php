<?php
include "../db/db-connect.php";


$id = $_GET['id'];
$sql = "SELECT units.id,units.unit_code,units.unit_name,units.year,units.term,units.credit_hours,courses.course_name,course_assign_to_teachers.lecturer FROM units INNER JOIN courses on units.course_id = courses.id INNER JOIN course_assign_to_teachers ON course_assign_to_teachers.unit_id=units.id WHERE course_assign_to_teachers.id = '$id'";
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
     $lecturer = $row['lecturer'];


    $sql2 = "INSERT INTO student_enroll_tbl (unit_name,unit_code,course_name,duration,year,term,student,lecturer) VALUES ('$unit_name','$unit_code','$course_name','$duration','$year','$term','$studentname','$lecturer')";
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
