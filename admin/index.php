<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="IMG/MindHub logo.png" type="image/icon type">
    <link rel="stylesheet" href="../css/style.css">
    <title>MindHub</title>
</head>

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
        <nav class="side-bar">
            <div class="user-p">
                <img src="../IMG/kurtis.jpg" alt="Display Picture">
                <h4>Kurtis</h4>

                <ul>
                    <li>
                        <a href="addLecturer.php">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>Lecturers List</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <span>Units List</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            <span>Allocations</span>
                        </a>
                    </li>

                    <li>
                        <a href="addDepartment.php">
                            <i class="fa fa-university" aria-hidden="true"></i>
                            <span>Departments</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            <span>Statistics</span>
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            <i class="fa fa-bullhorn" aria-hidden="true"></i>
                            <span>Announcements</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                            <span>About</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-power-off" aria-hidden="true"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="section-1">
            <h1>Welcome</h1>
            <p>#Course Allocation System</p>
            <div class="row">
                <div class="column">
                    <ul>
                        <li style="background: #38AEBF;">
                            <a href="Main/AssignUnit.html">
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