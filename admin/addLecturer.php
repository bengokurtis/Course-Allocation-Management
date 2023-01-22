<html lang="en">
<?php
include "./main/header.php";
?>

<body>
    <header class="header">
        <h2 class="u-name">Mind <b>Hub</b></h2>
    </header>

    <div class="container">
        <form method="post" action="#">
            <h1>Add Lecturer</h1>
            <label for="lecturer-name">Lecturer name</label><br>
            <input type="text" name="lec-name" id="lec-name" placeholder="Lecturer name" required><br>
            <label for="address">Address</label><br>
            <textarea rows="5" cols="50" name="address"id="address"></textarea><br>
            <label for="Email">Email</label><br>
            <input type="email" name="lec-email" id="lec-email" placeholder="Type email" required><br>
            <label for="Contact No">Contact No</label><br>
            <input type="text" name="lec-contact" id="lec-contact" placeholder="Type contact number" required><br>
            <label for="lec-desg">Designation</label><br>
            <select name="designation" id="designation">
                <option value="designation">--Select Designation--</option>
                <option value="chairman">Chairman</option>
                <option value="professor">Professor</option>
                <option value="assistant-prof">Assistant Professor</option>
                <option value="assoc-professor">Associate Professor</option>
                <option value="lecturer">Lecturer</option>
            </select><br>
            <label for="department-name">Department name</label><br>
        <select name="dept-name">
        <option value="school">School</option>
        </select><br>

        <div>            
            <button class="btn btn-primary" name='submit' type='submit'>Assign</button>
            <a href="./allocations.php" style="float: right; color: dodgerblue; text-decoration: none; margin-top: 20px;">View</a>
        </div>

        </form>
    </div>
</body>
</html>