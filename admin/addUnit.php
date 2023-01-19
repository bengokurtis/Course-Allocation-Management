<?php 
include "./main/header.php";
?>

<body>
    <header class="header">
        <h2 class="u-name">Mind <b>Hub</b></h2>
    </header>
    <div class="body">
    
            <div class="container"> 
                <form method="post" action="#">

                    <h1>Add Unit</h1>

                    <label for="course-name">Course Name</label><br>
                    <select name="course-name" id="course-name">
                        <option value="year">--Select Course Name--</option>
                        <option value="1">B.Tech Information Technology</option>
                        <option value="2">B.Tech Computer Technology</option>
                        <option value="3">B.Tech Computer Networks</option>
                        <option value="1">Dip.Tech Information Technology</option>
                        <option value="2">Dip.Tech Computer Technology</option>
                        <option value="3">Dip.Tech Computer Networks</option>
                    </select><br>

                    <label for="unit-code">Unit Code</label><br>
                    <input type="text" name="unit-code" id="unit-code" placeholder="Type the unit code"><br>
                   
                    <label for="course-name">Unit Name</label><br>
                    <input type="text" name="unit-name" id="unit-name" placeholder="Type the unit name"><br>
                    
                    <label for="course-description">Unit Description</label><br>
                    <textarea name="unit-description" id="unit-description" cols="40" rows="5" placeholder="Type the unit description"></textarea><br>
                 
                    <label for="year">Year taught</label><br>
                        <select name="year" id="year">
                            <option value="year">--Select Year--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select><br>

                    <label for="term">Term</label><br>
                        <select name="term" id="term">
                            <option value="term">--Select Term--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4(IBL)</option>
                        </select><br>
                    
                    <label for="course-duration">Credit Hours</label><br>
                        <input type="text" name="credit-hours" id="credit-hours" placeholder="Type the Credit Hours)"><br>
                    
                    <button class="btn btn-primary" name='submit' type='submit'>Add Course</button>
                </form>
            </div>
        </section>
    </div>
</body>
</html>








