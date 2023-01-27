<html lang="en">
<?php
include "./main/header.php";
?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql2 = "SELECT course_assign_to_teachers.id,units.unit_name,units.unit_code,departments.department_name,course_assign_to_teachers.lecturer FROM course_assign_to_teachers INNER JOIN units ON units.id = course_assign_to_teachers.unit_id INNER JOIN departments on departments.id = course_assign_to_teachers.department_id WHERE course_assign_to_teachers.id = '$id'";
    $result2 = mysqli_query($conn,$sql2);
    $count = mysqli_num_rows($result2);
    if($count === 1){
        $row = mysqli_fetch_assoc($result2);
        $dept_name = $row['department_name'];
        $unit_code = $row['unit_code'];
        $unit_name = $row['unit_name'];
        $lec_name = $row['lecturer'];
        
    } else {
        $_SESSION['status'] = "No record found";
        header("Location: ".SITEURL."admin/allocations.php");
    }
} else {
    header("Location: ".SITEURL."admin/allocations.php");
}

?>
<body>

    <!--Top-Bar-->
    <header class="header">
        <h2 class="u-name"><a href="dashboard.php">Mind <b>Hub</b></a></h2>
    </header>

        <div class="container"> 

            <form method="post" id="myForm">

            <h1> Update Assignment</h1>

            <?php
                
                $sql = "SELECT * from departments";
                $result = mysqli_query($conn,$sql); 
                ?>
            <label for="department-name">Department name</label><br>
            <input name="dept-name" id="dept-name" readonly value="<?php echo $dept_name;?>">
            <label for="unit-code">Unit Code</label><br>
            <input name="unit-code" id="unit-code" readonly value="<?php echo $unit_code;?>">

            <label for="unit-name">Unit Name</label><br>
            <input type="text" name="unit-name" id="unit-name" readonly value="<?php echo $unit_name;?>" required><br>
            
            <label for="lecturer-name">Lecturer</label><br>
            <input name="lec-name" id="lec-name" value="<?php echo $lec_name;?>">                    
            <div>
                <button class="btn btn-success" name='submit' type='submit'>Update</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
    $lecturer = $_POST['lec-name'];
    $sql3 = "UPDATE course_assign_to_teachers SET lecturer = '$lecturer' WHERE id = '$id'";
    $result3 = mysqli_query($conn,$sql3);
    if($result3){
        $_SESSION['status'] = "Assignment updated successfully";
        header("Location: ".SITEURL."admin/allocations.php");
    } else {
        $_SESSION['status'] = "Failed to update assignment";
        header("Location: ".SITEURL."admin/allocations.php");
    }
}

?>