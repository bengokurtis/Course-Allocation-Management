<html lang="en">
<?php
include "./main/header.php";
?>

<body>
    <header class="header">
        <h2 class="u-name"><a href="dashboard.php">Mind <b>Hub</b></a></h2>
    </header>
    
    <div class="container"> 
        <form method="post" action="#">
            <h1>Update Unit</h1>
            <label for="course-name">Course Name: </label><br>    
            <div class=selection>           
                <!--<select  name="course-name" id="course" multiple>
                    <option value="B.Tech Information Technology">B.Tech Information Technology</option>
                    <option value="B.Tech Computer Technology">B.Tech Computer Technology</option>
                    <option value="B.Tech Computer Networks">B.Tech Computer Networks</option>
                    <option value="Dip.Tech Information Technology">Dip.Tech Information Technology</option>
                    <option value="Dip.Tech Computer Technology">Dip.Tech Computer Technology</option>
                    <option value="Dip.Tech Computer Networks">Dip.Tech Computer Networks</option>
                </select>-->

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">B.Tech Information Technology</label><br>
                
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">B.Tech Computer Technology</label><br>

                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">B.Tech Computer Networks</label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">Dip.Tech Information Technology</label><br>
                
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">Dip.Tech Computer Technology</label><br>
                
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">Dip.Tech Computer Networks</label><br>
                </div>

            </div>
    
            <label for="unit-code">Unit Code: </label><br>
            <input type="text" name="unit-code" id="unit-code" placeholder="Type the unit code" required><br>
            
            <label for="course-name">Unit Name: </label><br>
            <input type="text" name="unit-name" id="unit-name" placeholder="Type the unit name" required><br>
            
           
            <label for="year">Year taught: </label><br>
                <select name="year" id="year">
                    <option value="year">--Select Year--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select><br>

            <label for="term">Term: </label><br>
                <select name="term" id="term">
                    <option value="term">--Select Term--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4(IBL)</option>
                </select><br>
            
            <label for="unit-duration">Credit Hours: </label><br>
                <input type="text" name="credit-hours" id="credit-hours" placeholder="Type the Credit Hours)" required><br>
            
            <div>            
                <button class="btn btn-success" name='submit' type='submit'>Update</button>
                <a href="./unitsList.php" style="float: right; color: dodgerblue; text-decoration: none; margin-top: 20px;">View</a>
            </div>

        </form>
    </div>
</body>
</html>