<nav class="side-bar">
            <div class="user-p">
                <img class="display-img" src="../IMG/TUK-Back.jpg" alt="Display Picture">
                <h4>Hello, <?php echo $_SESSION['user'];?></h4>

                <ul>
                    <li>
                        <a href="unitLists.php">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <span>My Units</span>
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
                        <a href="logout.php">
                            <i class="fa fa-power-off" aria-hidden="true"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>