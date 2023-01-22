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
        <h2 class="u-name">Mind <b>Hub</b></h2>
    </header>
    
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for unit..">

    <h1>Allocations</h1>

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
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Felix Okoth</td>
                    <td>00100 Nairobi</td>
                    <td>okoth@gmail.com</td>
                    <td>0757960890</td>
                    <td>Lecturer</td>
                    <td>Computer Science</td>

                    <td><a href="./updateLecturer.php" class="btn btn-success">Update</a></td>
                </tr>
                </tbody>
            </table>
    </div>
</body>
</html>
