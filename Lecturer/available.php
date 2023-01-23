<?php
include"../db/db-connect.php";

$lecname = $_SESSION['user'];
$id = $_GET['id'];
$sql = "SELECT units.id,units.unit_code,units.unit_name,units.year,units.term,units.credit_hours,courses.course_name FROM units INNER JOIN courses on units.course_id = courses.id";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
    $unitname = $row['unit_name'];
    $unitcode = $row['unit_code'];
    $coursename = $row['course_name'];
    $duration = $row['year'];
    $howlong = $row['credit_hours'];
}

echo $unitname = $row['unit_name'];
echo $unitcode = $row['unit_code'];
echo $coursename = $row['course_name'];
echo $duration = $row['year'];
echo $howlong = $row['credit_hours'];

$sql2 = "INSERT INTO available_lecturers(unit_name,unit_code,course_name,duration,year) VALUES('$unitname','$unitcode','$coursename','$duration','$howlong')";
$result2 = mysqli_query($conn,$sql2);
if($result2){
    echo "Juu ya meza";
}

?>
