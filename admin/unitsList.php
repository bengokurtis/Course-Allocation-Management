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
                    <th scope="col">Year taught</th>
                    <th scope="col">Term</th>
                    <th scope="col">Credit Hours</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Advanced Visual Programming</td>
                    <td>ECII/3208</td>
                    <td>B.Tech Information Technology</td>
                    <td>3</td>
                    <td>2</td>
                    <td>48</td>
                    <td><a href="./updateUnits.php" class="btn btn-success">Update</a></td>
                </tr>
                </tbody>
            </table>
    </div>
</body>
</html>