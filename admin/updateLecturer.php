<html lang="en">
<?php
include "./main/header.php";
?>
<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql2 = "SELECT * FROM lecturers WHERE id='$id'";
    $result2 = mysqli_query($conn,$sql2);
    $count = mysqli_num_rows($result2);
    if($count === 1){
        $row = mysqli_fetch_assoc($result2);
        $lec_name = $row['lecturer_name'];
        $address = $row['address'];
        $email = $row['email'];
        $contact = $row['contact_no'];
        $designation = $row['designation'];
        
    } else {
        $_SESSION['status'] = "No record found";
        header("Location: ".SITEURL."admin/lecturersList.php");
    }
} else {
    header("Location: ".SITEURL."admin/lecturersList.php");
}

?>
<body>
    <header class="header">
        <h2 class="u-name"><a href="dashboard.php">Mind <b>Hub</b></a></h2>
    </header>

    <div class="container">
        <form method="post" action="#">
            <h1>Update Lecturer</h1>
            <label for="lecturer-name">Lecturer name</label><br>
            <input type="text" name="lec-name" id="lec-name" placeholder="Lecturer name" value="<?php echo $lec_name;?>" required><br>
            <label for="address">Address</label><br>
            <textarea rows="5" cols="50" name="address"id="address" required><?php echo $address;?></textarea><br>
            <label for="Email">Email</label><br>
            <input type="email" name="lec-email" id="lec-email" placeholder="Type email" value="<?php echo $email;?>" required><br>
            <label for="Contact No">Contact No</label><br>
            <input type="text" name="lec-contact" id="lec-contact" placeholder="Type contact number" value="<?php echo $contact;?>" required><br>
            <label for="lec-desg">Designation</label><br>
            <select name="designation" id="desgnation">
                <option value="desgnation">--Select Designation--</option>
                <option value="chairman">Chairman</option>
                <option value="professor">Professor</option>
                <option value="assistant-prof">Assistant Professor</option>
                <option value="assoc-professor">Associate Professor</option>
                <option value="lecturer">Lecturer</option>
            </select><br>
        <!--  <?php
        
            $sql = "SELECT * from departments";
            $result = mysqli_query($conn,$sql); 
            ?>-->
            <label for="department-name">Department name</label><br>
        <select name="dept-name">
            <?php while($row = mysqli_fetch_array($result)):;?>
            <option value="<?php echo $row['id'];?>"><?php echo $row['department_name'];?></option>
            <?php endwhile?>*/
        </select><br>

        <div>
            <button class="btn btn-success" name='submit' type='submit'>Update</button>
        </div>
           
        </form>
    </div>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
     $lec_name = $_POST['lec-name'];
     $address = $_POST['address'];
        $email = $_POST['lec-email'];
        $contact = $_POST['lec-contact'];
        $designation = $_POST['designation'];
        $dept_name = $_POST['dept-name'];
        $sql3 = "UPDATE lecturers SET lecturer_name='$lec_name',address='$address',email='$email',contact_no='$contact',designation='$designation',department_id='$dept_name' WHERE id='$id'";
        $result3 = mysqli_query($conn,$sql3);
        if($result3){
            $_SESSION['status'] = "Lecturer updated successfully";
            header("Location: ".SITEURL."admin/lecturerList.php");
        } else {
            $_SESSION['status'] = "Lecturer not updated";
            header("Location: ".SITEURL."admin/lecturerList.php");
        }  


}

?>