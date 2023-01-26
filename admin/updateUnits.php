<html lang="en">
<?php
include "./main/header.php";
?>
<?php  
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql2 = "SELECT * FROM units WHERE id='$id'";
    $result2 = mysqli_query($conn,$sql2);
    $count = mysqli_num_rows($result2);
    if($count === 1){
        $row = mysqli_fetch_assoc($result2);
        $unit_code = $row['unit_code'];
        $unit_name = $row['unit_name'];
        $credit_hours = $row['credit_hours'];
    } else {
        $_SESSION['status'] = "No record found";
        header("Location: ".SITEURL."admin/unitsList.php");
    }
} else {
    header("Location: ".SITEURL."admin/unitsList.php");
}

?>
<body>
    <header class="header">
        <h2 class="u-name"><a href="dashboard.php">Mind <b>Hub</b></a></h2>
    </header>
    
    <div class="container"> 
        <form method="post" action="#">
            <h1>Update Unit</h1>         
                <?php
                    $sql = "SELECT * FROM courses";
                    $result = mysqli_query($conn, $sql);
                    ?>
                    <label for="course-name">Course Name</label><br>
                    <select name="course-name" id="course-name">
                        <option value="year">--Select Course Name--</option>
                        <?php while($row= mysqli_fetch_assoc($result)):;?>
                        <option value="<?php echo $row['id'];?>"><?php echo $row['course_name'];?></option>
                        <?php endwhile;?>
                    </select><br>

            
    
            <label for="unit-code">Unit Code: </label><br>
            <input type="text" name="unit-code" id="unit-code" placeholder="Type the unit code" value="<?php echo $unit_code;?>" required><br>
            
            <label for="course-name">Unit Name: </label><br>
            <input type="text" name="unit-name" id="unit-name" placeholder="Type the unit name" value="<?php echo $unit_name;?>" required><br>
            
           
            <label for="year">Year taught: </label><br>
                <select name="year" id="year">
                    <option value="year">--Select Year--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select><br>

            <label for="term">Term: </label><br>
                <select name="term" id="term">
                    <option value="term">--Select Term--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4(IBL)</option>
                </select><br>
            
            <label for="unit-duration">Credit Hours: </label><br>
                <input type="text" name="credit-hours" id="credit-hours" placeholder="Type the Credit Hours" value="<?php echo $credit_hours;?>" required><br>
            
            <div>            
                <button class="btn btn-success" name='submit' type='submit'>Update</button>
            </div>

        </form>
    </div>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    echo $course_id = $_POST['course-name'];
    echo $unit_code = $_POST['unit-code'];
    echo $unit_name = $_POST['unit-name'];
    echo $year = $_POST['year'];
    echo $term = $_POST['term'];
    echo $credit_hours = $_POST['credit-hours'];

    $sql3 = "UPDATE units SET course_id='$course_id', unit_code='$unit_code', unit_name='$unit_name', year='$year', term='$term', credit_hours='$credit_hours' WHERE id='$id'";
    $result3 = mysqli_query($conn,$sql3);
    if($result3){
        $_SESSION['status'] = "Unit Updated Successfully";
        header("Location: ".SITEURL."admin/unitsList.php");
    } else {
        $_SESSION['status'] = "Unit Not Updated";
        header("Location: ".SITEURL."admin/unitsList.php");
    }

}
?>