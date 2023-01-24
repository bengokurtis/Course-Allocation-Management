<html lang="en">
<?php
include "./main/header.php";
?>

<body>

    <!--Top-Bar-->
    <header class="header">
    <h2 class="u-name"><a href="dashboard.php">Mind <b>Hub</b></a></h2>
    </header>

    <div class="container">

        <form method="post" id="myForm">

            <h1>Assign Unit</h1>

              <?php
       
       $sql = "SELECT * from departments";
       $result = mysqli_query($conn,$sql); 
       ?>
       <label for="department-name">Department name</label><br>
    <select name="dept-name" id="dept-name" onchange="GetDetail(this.value)">
    <option value="select department">---Select department---</option>   
    <?php while($row = mysqli_fetch_array($result)):;?>
       <option value="<?php echo $row['id'];?>"><?php echo $row['department_name'];?></option>
       <?php endwhile?>*/
    </select><br>
            
                
            <?php
                $sql = "SELECT * from units";
                $result = mysqli_query($conn,$sql); 
            ?>
            <label for="unit-code">Unit Code</label><br>
            <select name="unit-code" onchange="getCourse(this.value)" required>
            <option value="select-credit">--Select Unit credit--</option>
                <?php while($row = mysqli_fetch_array($result)):;?>
                <option value="<?php echo $row['id'];?>"><?php echo $row['unit_code'];?></option>
                <?php endwhile?>
            </select><br>
            <label for="unit-name">Unit Name</label><br>
            <input type="text" name="unit-name" id="unit-name" required><br>
            <label for="course-credit">Unit credit</label><br>
            <input type="number" name="course-credit" id="course-credit"><br>
            
            <label for="lecturer-name">Lecturer</label><br>
            <select name="lec-name" id="lec-name" required>
                <option value="select lecturer">---Select lecturer---</option>
            </select><br>
            <?php
            $sql = "SELECT * from courses";
            $result = mysqli_query($conn,$sql);
        
            ?>
            <label for="course-name">Course Name</label><br>
            <select type="text" name="course-name" id="course-name"><br>
            <option value="select-credit">--Select course Name--</option>
                <?php while($row = mysqli_fetch_array($result)):;?>
                    <option value="<?php echo $row['id'];?>"><?php echo $row['course_name'];?></option>
                <?php endwhile?>*/
             </select><br>
            <button class="btn btn-primary" name='submit' type='submit'>Add Lecturer</button>
        </form>
    </div>
</body>

</html>