<?php
include "./main/header.php";
?>

<body>

    <!--Top-Bar-->
    <header class="header">
        <h2 class="u-name">Mind <b>Hub</b></h2>
    </header>

    <div class="container">

        <form method="post" id="myForm">

            <h1>Assign Unit</h1>

            <label for="department-name">Department name</label><br>
            <select name="dept-name" id="dept-name" onchange="GetDetail(this.value)">
            <option value="select department">---Select department---</option>   
            </select><br>

            <label for="lecturer-name">Lecturer</label><br>
            <select name="lec-name" id="lec-name" onchange="GetCredit(this.value)">
                <option value="select lecturer">---Select lecturer---</option>
            </select><br>
            <label for="course-code">Course code</label><br>
            <select name="course-code" onchange="getCourse(this.value)">
            <option value="select-credit">--Select course credit--</option>
                <option value="<?php echo $row['id'];?>"></option>
            </select><br>
            <label for="course-name">Course Name</label><br>
            <input type="text" name="course-name" id="course-name"><br>

            <label for="course-credit">Course credit</label><br>
            <input type="number" name="course-credit" id="course-credit"><br>

            <button class="btn btn-primary" name='submit' type='submit'>Add Lecturer</button>
            <button class="btn btn-success" style="float: right;">Update</button>
        </form>
    </div>
</body>

</html>