<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="IMG/MindHub logo.png" type="image/icon type">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="main.css">
    <title>MindHub</title>
</head>
<body>
    <header class="header">
        <h2 class="u-name">Mind <b>Hub</b></h2>
    </header>

    <div class="container">
        <form method="post" action="#">
            <h1>Add Lecturer</h1>
            <label for="lecturer-name">Lecturer name</label><br>
            <input type="text" name="lec-name" id="lec-name" placeholder="Lecturer name"><br>
            <label for="address">Address</label><br>
            <textarea rows="5" cols="50" name="address"id="address"></textarea><br>
            <label for="Email">Email</label><br>
            <input type="email" name="lec-email" id="lec-email" placeholder="Type email"><br>
            <label for="Contact No">Contact No</label><br>
            <input type="text" name="lec-contact" id="lec-contact" placeholder="Type contact number"><br>
            <label for="lec-desg">Designation</label><br>
            <select name="designation" id="desgnation">
                <option value="desgnation">--Select Designation--</option>
                <option value="chairman">Chairman</option>
                <option value="professor">Professor</option>
                <option value="assistant-prof">Assistant Professor</option>
                <option value="assoc-professor">Associate Professor</option>
                <option value="lecturer">Lecturer</option>
            </select><br>
        <!--  <?php
        
            $sql = "SELECT * from departments";
            $result = mysqli_query($conn,$sql); 
            ?>-->
            <label for="department-name">Department name</label><br>
        <select name="dept-name">
            <?php while($row = mysqli_fetch_array($result)):;?>
            <option value="<?php echo $row['id'];?>"><?php echo $row['department_name'];?></option>
            <?php endwhile?>*/
        </select><br>
        
            <button class="btn btn-primary" name='submit' type='submit'>Add Lecturer</button>
            <button class="btn btn-primary" style="float: right;">View</button>
        </form>
    </div>
</body>
</html>