<?php
include "./admin/main/header.php";
?>

<body>
      <header class="header">
        <h2 class="u-name">Mind <b>Hub</b></h2>
      </header>

<div class="body">
    <div class="tagline">
        <img src="../IMG/MindHub tagline.png" alt="MindHub Tagline">
    </div>

    <div class="container">
        <form action="" method="">
            <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
            <hr>

            <div class="mb-3">
              <label for="username" class="form-label">Full Names: </label>
              <input type="text" class="form-control" id="username" placeholder="First and Last Name" required>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Registration No: </label>
                <input type="text" class="form-control" id="registration-no" placeholder="Registration Number" required>
                <div class="form-text">Format eg. SCII/00001/2018</div>
            </div>


            <div class="mb-3">
                <label for="course" class="form-label">Course of Study: </label>
                <select name="course" id="course" required>
                    <option value="course">--Select Course--</option>
                    <option value="B.Tech Information Technology">B.Tech Information Technology</option>
                    <option value="B.Tech Computer Technology">B.Tech Computer Technology</option>
                    <option value="B.Tech Computer Networks">B.Tech Computer Networks</option>
                    <option value="Dip.Tech Information Technology">Dip.Tech Information Technology</option>
                    <option value="Dip.Tech Computer Technology">Dip.Tech Computer Technology</option>
                    <option value="Dip.Tech Computer Networks">Dip.Tech Computer Networks</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Year of Study: </label>
                <select name="year" id="year" required>
                    <option value="year">--Select Year--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

              <div class="mb-3">
                <label for="Password1" class="form-label">Create Password: </label>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
              </div>
            
            <div class="mb-3">
              <label for="Password2" class="form-label">Repeat Password: </label>
              <input type="password" class="form-control" id="repeat-password" placeholder="Repeat Password" required>
            </div>
            
            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>            

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Sign Up</button>
                <p style="float: right;">Already have an account? <a href="login.html">Login</a></p>
            </div>

          </form>
    </div>
</div>
</body>
</html>



       
     
  
  
  