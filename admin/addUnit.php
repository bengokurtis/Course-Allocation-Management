<?php 
include "./main/header.php";
?>
<?php
if(isset($_POST['submit'])){
    $course_name = $_POST['course-name'];
    $unit_code = $_POST['unit-code'];
    $unit_name = $_POST['unit-name'];
    $unit_description = $_POST['unit-description'];
    $year = $_POST['year'];
    $term = $_POST['term'];
    $credit_hours = $_POST['credit-hours']; 

    $sql = "INSERT INTO units(course_id,unit_code,unit_name,unit_description,year,term,credit_hours) VALUES('$course_name','$unit_code','$unit_name','$unit_description','$year','$term','$credit_hours')";
    $result = mysqli_query($conn,$sql);
    if($result){
       $_SESSION['status'] = "Unit added successfully!!";
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
    <div class="body">
    
            <div class="container"> 
                <form method="post" action="#">

                    <h1>Add Unit</h1>
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

                    <label for="unit-code">Unit Code</label><br>
                    <input type="text" name="unit-code" id="unit-code" placeholder="Type the unit code"><br>
                   
                    <label for="unit-name">Unit Name</label><br>
                    <input type="text" name="unit-name" id="unit-name" placeholder="Type the unit name"><br>
                    
                    <label for="course-description">Unit Description</label><br>
                    <textarea name="unit-description" id="unit-description" cols="40" rows="5" placeholder="Type the unit description"></textarea><br>
                 
                    <label for="year">Year taught</label><br>
                        <select name="year" id="year">
                            <option value="year">--Select Year--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select><br>

                    <label for="term">Term</label><br>
                        <select name="term" id="term">
                            <option value="term">--Select Term--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4(IBL)</option>
                        </select><br>
                    
                    <label for="course-duration">Credit Hours</label><br>
                        <input type="text" name="credit-hours" id="credit-hours" placeholder="Type the Credit Hours)"><br>
                    
                    <button class="btn btn-primary" name='submit' type='submit'>Add Course</button>
                </form>
            </div>
        </section>
    </div>
</body>
</html>








