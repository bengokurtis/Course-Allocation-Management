<html lang="en">
<?php
include "./main/header.php";
?>
<?php

if(isset($_POST['submit'])){
    $departmentcode = $_POST['depart-code'];
    $departmentname = $_POST['depart-name'];
    $departmenthead = $_POST['depart-head'];

    $sql = "INSERT INTO departments(department_code,department_name,department_head) VALUES('$departmentcode','$departmentname','$departmenthead')";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['status'] = "Department added successfully!!";
    }
}

?>
<?php

if(isset($_POST['submit'])){
    $departmentcode = $_POST['depart-code'];
    $departmentname = $_POST['depart-name'];
    $departmenthead = $_POST['depart-head'];

    $sql = "INSERT INTO departments(department_code,department_name,department_head) VALUES('$departmentcode','$departmentname','$departmenthead')";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['status'] = "Department added successfully!!";
    }
}

?>
<body>
    <!--<input type="checkbox"  id="checkbox">-->
    <header class="header">
            <h2 class="u-name"><a href="dashboard.php">Mind <b>Hub</b></a></h2>
    </header>
    <?php
            if(isset($_SESSION['status'])){
                ?>
            <div class="alert alert-success alert-dismissible fade show">
                <?php echo $_SESSION['status']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
           </div>
           <?php
           unset($_SESSION['status']);
            }
           ?>
    <div class="body">
            <div class="container"> 
                <form method="post">
                    <h1>Department</h1>

                    <label for="department-code">Department code</label><br>
                    <input type="text" name="depart-code" id="department-code" placeholder="Type department code" required><br>
                    
                    <label for="department-name">Department name</label><br>
                    <input type="text" name="depart-name" id="department-name" placeholder="Type department name" required><br>
                    
                    <label for="department-head">Department Head</label><br>
                    <input type="text" name="depart-head" id="department-head" placeholder="Type department head" required><br>
                    
                    <button class="btn btn-primary" name='submit' type='submit'>Add Department</button>
                </form>
            </div>
    </div>
</body>
</html>








