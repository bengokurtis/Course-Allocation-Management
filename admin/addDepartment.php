<html lang="en">
<?php
include "./main/header.php";
?>

<body>
    <!--<input type="checkbox"  id="checkbox">-->
    <header class="header">
        <h2 class="u-name">Mind <b>Hub</b></h2>
    </header>
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








