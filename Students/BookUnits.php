
    <?php
    include "./includes/header.php";
    ?>
    
<body>

    <!--Top-Bar-->
    <header class="header">
    <h2 class="u-name"><a href="dashboard.php">Mind <b>Hub</b></a></h2>
    </header>
        <!--INPUT SECTION-->
            <div class="form-group" style="width: 850px;">
                <select class="form-control" id="sel1">
                <option value="">Programme of Study</option>
                </select>

                <select class="form-control" id="sel1">
                <option value="">Year of Study</option>
                </select>
            </div>
            <?php
               if(isset($_SESSION['enroll'])){
                   ?>
               <div class="alert alert-success alert-dismissible fade show">
                   <strong><?php echo $_SESSION['enroll']; ?></strong> 
                   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
              <?php
              unset($_SESSION['enroll']);
               }
           ?>

            <!--TABLE SECTION-->
            <div class="container">
                <div class="box">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Course code</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Lecturer</th>
                            <th scope="col">Year</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT course_assign_to_teachers.id,courses.course_name,units.unit_code,units.year,units.term,course_assign_to_teachers.unit_credit,course_assign_to_teachers.lecturer FROM course_assign_to_teachers INNER JOIN courses on courses.id = course_assign_to_teachers.course_id INNER JOIN units on units.id = course_assign_to_teachers.unit_id";
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                                  $id = $row['id'];
                                  $course_name = $row['course_name'];
                                  $unit_code = $row['unit_code'];
                                  $unit_credit = $row['unit_credit'];
                                  $lecturer = $row['lecturer'];
                                  $duration = $row['year'].".".$row['term']; 

                            ?>
                        <tr>
                            <th scope="row"><?php echo $id;?></th>
                            <td><?php echo $course_name;?></td>
                            <td><?php echo $unit_code;?></td>
                            <td><?php echo $unit_credit;?></td>
                            <td><?php echo $lecturer;?></td>
                            <td><?php echo $duration;?></td>
                            <td><a href="<?php echo SITEURL?>Students/enroll.php?id=<?php echo $id;?>" class="btn btn-success">Enroll</a></td>
                        </tr>
                        <?php };?>
                            </tbody>
                    </table>
            </div>
        </div>
       
    </div>
</body>
</html>




