<html lang="en">
    <?php
    include "./admin/main/header.php";
    ?>
    
<body>

    <!--Top-Bar-->
    <header class="header">
        <h2 class="u-name">Mind <b>Hub</b></h2>
    </header>
        <!--INPUT SECTION-->
            <div class="form-group" style="width: 850px;">
                <select class="form-control" id="sel1">
                <option value="">Programme of Study</option>
                </select>

                <select class="form-control" id="sel1">
                <option value="">Year of Study</option>
                </select>
            </div>

            <!--TABLE SECTION-->
            <div class="container">
                <div class="box">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Course code</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Lecturer</th>
                            <th scope="col">Year</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Advanced Visual Programming</td>
                            <td>ECII/3208</td>
                            <td>42Hrs</td>
                            <td>Felix Okoth</td>
                            <td>3.2</td>
                            <td><a href="#" class="btn btn-success">Enroll</a></td>
                        </tr>
                        </tbody>
                    </table>
            </div>
        </div>
       
    </div>
</body>
</html>




