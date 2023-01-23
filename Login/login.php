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

    <div class="container1">
        <form action="" method="post">

          <h1>Login</h1>
          <hr>

            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" >
              <div class="form-text">Your username is your Student Registration No.</div>
            </div>
            
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" 
                    class="form-control" 
                    id="password">
            </div>

            <div class="mb-3">
              <p>Don't have an account? Register <a href="register.html">here</a></p>
            </div>
            
            
            <div class="mb-3 form-check">
              <input type="checkbox" checked="checked" class="form-check-input" id="signed">
              <label class="form-check-label">Keep me signed in</label>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>

            <p style="float: right;">Staff <a href="../Login/staffLogin.html">Login</a></p>
          </form>
    </div>
</div>
</body>
</html>