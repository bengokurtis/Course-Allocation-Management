<html lang="en">
<?php
include "./main/header.php";
?>
<?php

if(isset($_POST['submit'])){
    $lecturername = $_POST['lec-name'];
    $lectureraddress = $_POST['address'];
    $lectureremail = $_POST['lec-email'];
    $lecturercontact = $_POST['lec-contact'];
    $lecturerdesignation =$_POST['designation'];
    $lecturerdepartment = $_POST['dept-name'];
    $lecturerRegNo = "TUK/".rand(000,999)."/".rand(000,999);

    $sql = "INSERT INTO lecturers(department_id,lecturer_name,address,email,contact_no,designation,lec_reg_no) VALUES('$lecturerdepartment','$lecturername','$lectureraddress','$lectureremail','$lecturercontact','$lecturerdesignation','$lecturerRegNo')";
    $result = mysqli_query($conn,$sql);
    if($result){
        $sql2 = "INSERT INTO lecturer_login(lecturer_name,lec_login_id) VALUES('$lecturername','$lecturerRegNo')";
        $res2 = mysqli_query($conn,$sql2);
       $_SESSION['status'] = "Lecturer added successfully!!";
    }

}


?>
<body>
    <header class="header">
    <h2 class="u-name"><a href="dashboard.php">Mind <b>Hub</b></a></h2>
    </header>
    <?php
            if(isset($_SESSION['status'])){
                ?>
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Welcome!</strong> <?php echo $_SESSION['status']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
           </div>
           <?php
           unset($_SESSION['status']);
            }
           ?>
    <div class="container">
        <form method="post" action="#">
            <h1>Add Lecturer</h1>
            <label for="lecturer-name">Lecturer name</label><br>
            <input type="text" name="lec-name" id="lec-name" placeholder="Lecturer name" required><br>
            <label for="address">Address</label><br>
            <textarea rows="5" cols="50" name="address"id="address"></textarea><br>
            <label for="Email">Email</label><br>
            <input type="email" name="lec-email" id="lec-email" placeholder="Type email" required><br>
            <label for="Contact No">Contact No</label><br>
            <input type="text" name="lec-contact" id="lec-contact" placeholder="Type contact number" required><br>
            <label for="lec-desg">Designation</label><br>
            <select name="designation" id="designation">
                <option value="designation">--Select Designation--</option>
                <option value="chairman">Chairman</option>
                <option value="professor">Professor</option>
                <option value="assistant-prof">Assistant Professor</option>
                <option value="assoc-professor">Associate Professor</option>
                <option value="lecturer">Lecturer</option>
            </select><br>
            <?php
            $sql = "SELECT * FROM departments";
            $result = mysqli_query($conn,$sql);
            
            ?>
        <label for="department-name">Department name</label><br>
        <select name="dept-name">
        <option value="department">--Select department--</option>
            <?php while($row = mysqli_fetch_assoc($result)):;?>
        <option value="<?php echo $row['id'];?>"><?php echo $row['department_name'];?></option>
        <?php endwhile?>
        </select><br>
       
            <button class="btn btn-primary" name='submit' type='submit'>Add Lecturer</button>
        </form>
    </div>
</body>
</html>