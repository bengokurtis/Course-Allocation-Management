<?php 
include './includes/header.php';
?>
<body>
    <!--<input type="checkbox"  id="checkbox">-->
    <header class="header">
        <h2 class="u-name">Mind <b>Hub</b>
       <!--<label for="checkbox">
            <i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
        </label>-->
        </h2>
        
        <div class="dropdown">
            <i class="fa fa-users" aria-hidden="true"></i>
            <div class="dropdown-content">
              <a href="#"><i class="fa fa-address-book" aria-hidden="true"></i>Profile</a>
              <a href="#">
                <i class="fa fa-cogs" aria-hidden="true"></i>Settings
              </a>
              <a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>Help</a>
              
            </div>
        </div>
    
    </header>
    <div class="body">
      <?php include "./includes/side-panel.php";?>
        <section class="section-1">
            <div class="row">
                <div class="column">
                    <ul>
                        <li style="background: #38AEBF;">
                            <a href="allocations.php">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <span>Allocations</span>
                            </a>
                        </li>

                        <li style="background: #4FBF38;">
                            <a href="#">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            <span>Schedule</span>
                            </a>
                         </li>
                         
                    </ul>
                </div>  
            
                <div class="column">
                    <ul>
                        <li style="background: #BF3838;">
                            <a href="Availability.php">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                <span>Book Course</span>
                            </a>
                         </li>
                         <li style="background: #3884BF;">
                            <a href="#">
                                <i class="fa fa-files-o" aria-hidden="true"></i>
                                <span>Reports</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </section>
       
    </div>
</body>
</html>