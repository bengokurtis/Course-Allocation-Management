<?php
include"../db/db-connect.php";

$lecname = $_SESSION['user'];
$id = $_GET['id'];
$sql = "INSERT INTO available_lecturers (unit_name,unit_code,course_name,duration,year,lecturer_id) SELECT units.unit_name, units.unit_code,courses.course_name,units.credit_hours,units.year,lecturer_login.id FROM units INNER JOIN courses on courses.id = units.id INNER JOIN lecturer_login on lecturer_login.id=courses.id WHERE lecturer_login.lecturer_name ='$lecname'";
$result = mysqli_query($conn, $sql);
if($result){
    echo "Loco mad stalkers";
}

?>
H\