<?php
include "./main/header.php";
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
        <!--Side bar-->
        <?php include "./main/side-bar.php";?>
        <!--end of side bar-->
        <section class="section-1">
            <h1>Welcome</h1>
            <p>#Course Allocation System</p>
            <div class="row">
                <div class="column">
                    <ul>
                        <li style="background: #38AEBF;">
                            <a href="AssignUnit.php">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span> Assign Units</span>
                            </a>
                        </li>

                        <li style="background: #4FBF38;">
                            <a href="#">
                                <i class="fa fa-university" aria-hidden="true"></i>
                                <span>Departments</span>
                            </a>
                        </li>

                        <li style="background: #900C3F;">
                            <a href="#">
                                <i class="fa fa-address-book" aria-hidden="true"></i>
                                <span>Register</span>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="column">
                    <ul>
                        <li style="background: #BF3838;">
                            <a href="#">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span>Students</span>
                            </a>
                        </li>
                        <li style="background: #3884BF;">
                            <a href="Main/addLecturer.html">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span>Lecturers</span>
                            </a>
                        </li>

                        <li style="background: #581845;">
                            <a href="#">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                <span>Applications</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </section>

    </div>
</body>

</html>