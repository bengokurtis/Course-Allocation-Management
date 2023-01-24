<?php
include '../db/db-connect.php';
// Get the user id
 $user_id = $_REQUEST['id'];

// Database connection


if ($user_id !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	
    $sql = "SELECT units.unit_code,units.unit_name,units.credit_hours,booked_units.lecturer FROM units INNER JOIN booked_units on booked_units.unit_code=units.unit_code WHERE units.id='$user_id'";
    $result = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_assoc($result)){
          // Get the first name
            $rows[] = $row;

    }   
}

// Store it in a array
 
    $result = array($rows);

     echo $myJSON = json_encode($result);



 

// Send in JSON encoded form


?>