<html lang="en">
<?php
include "./main/header.php";
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
    
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for lecturer..">

    <h1>Lecturer List</h1>

    <!--TABLE SECTION-->
    <div class="container2">
        <div class="box">
            <table class="table table-striped" id="myTable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Lecturer name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Department Name</th>
                </tr>
                </thead>
                <?php
                $sql = "SELECT lecturers.id,lecturers.lecturer_name,lecturers.address,lecturers.email,lecturers.contact_no,lecturers.designation,departments.department_name FROM lecturers INNER JOIN departments on lecturers.department_id = departments.id";
                $result = mysqli_query($conn, $sql); 
                while($row= mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $lecturer_name = $row['lecturer_name'];
                    $address = $row['address'];
                    $email = $row['email'];
                    $contact_no = $row['contact_no'];
                    $designation = $row['designation'];
                    $department_name = $row['department_name'];
                
                ?>
                <tbody>
                <tr>
                    <th scope="row"><?php echo $id;?></th>
                    <td><?php echo $lecturer_name;?></td>
                    <td><?php echo $address;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $contact_no;?></td>
                    <td><?php echo $designation;?></td>
                    <td><?php echo $department_name;?></td>

                    <td><a href="./updateLecturer.php" class="btn btn-success">Update</a></td>
                </tr>
                </tbody>
                <?php
                }?>
            </table>
    </div>
</body>
</html>
