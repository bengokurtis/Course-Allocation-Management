
<?php
include "./includes/header.php";
?>

<body>
    <!--<input type="checkbox"  id="checkbox">-->
    <header class="header">
    <h2 class="u-name"><a href="index.php">Mind <b>Hub</b></a></h2>
    <?php
            if(isset($_SESSION['login'])){
                ?>
            <div class="alert alert-success alert-dismissible fade show">
                <strong><?php echo $_SESSION['login']; ?></strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
           </div>
           <?php
           unset($_SESSION['login']);
            }
           ?>
        
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
        <?php include "./includes/side-bar.php";?>
        <section class="section-1">
            <div class="row">
                <div class="column">
                    <ul>
                        <li style="background: #BF3838;">
                            <a href="./BookUnits.php">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            <span>Book Units</span>
                            </a>
                         </li>
                         
                    </ul>
                </div>  
            
                <div class="column">
                    <ul>
                        <li style="background: #4FBF38;">
                            <a href="#">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            <span>Schedule</span>
                            </a>
                         </li>

                         <li style="background: #3884BF;">
                            <a href="#">
                                <i class="fa fa-sliders" aria-hidden="true"></i>
                                <span>Progress</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </section>
       
    </div>
</body>
</html>

<!--<div class="column" style=" width: 350px;">
    <div class="card">
        <img src="IMG/kurtis.jpg" alt="John" style="width:100%">
        <h2>Kurtis Bengo</h2>
        <p>BTech Info. Technology <Br>Year 4 Term/Semester 1</Br></p>
      </div>


</div>