
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

    <h1>All Units</h1>

    <!--TABLE SECTION-->
    <div class="container">
        <div class="box">
            <table class="table table-striped" id="myTable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" >Unit Name</th>
                    <th scope="col">Unit code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Lecturer</th>
                </tr>
                </thead>
                <?php 
                $student = $_SESSION['user'];
                $sql = "SELECT * FROM student_enroll_tbl WHERE student = '$student'";
                $result = mysqli_query($conn, $sql);
                $counter = 0;
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row['id'];  
                  $unit_name = $row['unit_name'];
                    $unit_code = $row['unit_code'];
                    $course_name = $row['course_name'];
                    $lecturer = $row['lecturer'];
                    $counter++;
                ?>
                <tbody>
                <tr>
                    <th scope="row"><?php echo $counter;?></th>
                    <td><?php echo $unit_name;?></td>
                    <td><?php echo $unit_code;?></td>
                    <td><?php echo $course_name;?></td>
                    <td><?php echo $lecturer;?></td>
                </tr>
                </tbody>
                <?php } ?>
            </table>
    </div>
</body>
</html>

