<?php

include './includes/header.php';

?>

<script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>

<body>
    <header class="header">
    <h2 class="u-name"><a href="dashboard.php">Mind <b>Hub</b></a></h2>
    </header>
    <?php
            if(isset($_SESSION['booked'])){
                ?>
            <div class="alert alert-success alert-dismissible fade show">
                <strong><?php echo $_SESSION['booked']; ?></strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
           </div>
           <?php
           unset($_SESSION['booked']);
            }
           ?>
    
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for unit..">

    <h1>All Units</h1>

    <!--TABLE SECTION-->
    <div class="container">
        <div class="box">
            <table class="table table-striped" id="myTable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Unit Name</th>
                    <th scope="col">Unit code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Year</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <?php 
                $sql = "SELECT units.id,units.unit_code,units.unit_name,units.year,units.term,units.credit_hours,courses.course_name FROM units INNER JOIN courses on units.course_id = courses.id";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row['id'];  
                  $unit_name = $row['unit_name'];
                    $unit_code = $row['unit_code'];
                    $course_name = $row['course_name'];
                    $duration = $row['credit_hours'];
                    $year = $row['year']."."."$row[term]";

                ?>
                <tbody>
                <tr>
                    <th scope="row"><?php echo $id;?></th>
                    <td><?php echo $unit_name;?></td>
                    <td><?php echo $unit_code;?></td>
                    <td><?php echo $course_name;?></td>
                    <td><?php echo $duration;?></td>
                    <td><?php echo $year;?></td>
                    <td><a href="<?php echo SITEURL?>Lecturer/available.php?id=<?php echo $id;?>" class="btn btn-success" type="submit" name="submit">Book</a></td>
                </tr>
                </tbody>
                <?php } ?>
            </table>
    </div>
</body>
</html>









