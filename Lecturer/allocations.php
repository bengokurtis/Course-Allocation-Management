<html lang="en">
<?php
include "./includes/header.php";
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
               if(isset($_SESSION['status'])){
                   ?>
               <div class="alert alert-success alert-dismissible fade show">
                   <strong><?php echo $_SESSION['status']; ?></strong> 
                   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
              <?php
              unset($_SESSION['status']);
               }
           ?>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for unit..">

    <h1>Allocations</h1>

    <!--TABLE SECTION-->
    <div class="container2">
        <div class="box">
            <table class="table table-striped" id="myTable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Unit Name</th>
                    <th scope="col">Unit code</th>
                    <th scope="col">Department Name</th>
                    
                </tr>
                </thead>
                <?php 
                $lecname = $_SESSION['user-lec'];
                $sql = "SELECT course_assign_to_teachers.id,units.unit_name,units.unit_code,departments.department_name,course_assign_to_teachers.lecturer FROM course_assign_to_teachers INNER JOIN units ON units.id = course_assign_to_teachers.unit_id INNER JOIN departments on departments.id = course_assign_to_teachers.department_id where lecturer='$lecname'";
                $result = mysqli_query($conn,$sql);
                $count = 1;
                while($row = mysqli_fetch_assoc($result)){
                    $id = $count;  
                    $unit_name = $row['unit_name'];
                    $unit_code = $row['unit_code'];
                    $department_name = $row['department_name'];
                    $lecturer = $row['lecturer'];
                    $count++;
                
                ?>
                <tbody>
                <tr>
                    <th scope="row"><?php echo $id;?></th>
                    <td><?php echo $unit_name;?></td>
                    <td style="width:100px;"><?php echo $unit_code;?></td>
                    <td><?php echo $department_name;?></td>
                </tr>
                </tbody>
                <?php } ?>
            </table>
    </div>
</body>
</html>
