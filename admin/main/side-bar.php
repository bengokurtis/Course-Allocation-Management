<nav class="side-bar">
            <div class="user-p">
                <img src="../IMG/kurtis.jpg" alt="Display Picture">
                <h4>
                    <?php
                    echo $_SESSION['user'];
                    ?>
                </h4>

                <ul>
                    <li>
                        <a href="addUnit.php">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <span>Add Units</span>
                        </a>
                    </li>

                    <li>
                        <a href="unitsList.php">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <span>Units List</span>
                        </a>
                    </li>


                    <li>
                        <a href="allocations.php">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            <span>Allocations</span>
                        </a>
                    </li>

                    <li>
                        <a href="lecturerList.php">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>Lecturers List</span>
                        </li>                       
                    
                    <li>
                        <a href="#">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <span>Students List</span>
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            <i class="fa fa-bullhorn" aria-hidden="true"></i>
                            <span>Announcements</span>
                        </a>
                    </li>

                    <li>
                        <a href="logout.php">
                            <i class="fa fa-power-off" aria-hidden="true"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>