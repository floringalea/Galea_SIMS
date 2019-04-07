<?php include_once('../app/views/templates/header.php') ?>

<div class="sidebar">
    <a href="https://www.galeadigital.com/dashboard/index"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="https://www.galeadigital.com/students/addStudent"><i class="fa fa-fw fa-user"></i> Add Student</a>
    <a href="https://www.galeadigital.com/students/importStudent"><i class="fa fa-fw fa-download"></i> Import Student(s)</a>
    <a href="https://www.galeadigital.com/attendance/index"><i class="fa fa-fw fa-check"></i> Attendance</a>
    <a href="https://www.galeadigital.com/asessments/index"><i class="fa fa-fw fa-pencil"></i> Assessments</a>
    <a href="https://www.galeadigital.com/userauth/logout"><i class="fa fa-fw fa-lock"></i> Logout</a>
</div>

<div class=container>
    <h2>Students Admin Dashboard</h2>
    <div class="row">
        <form class="" action="" method="POST">
            <h3>Search Students</h3>
            <div class="col-lg-5">
                <div class="row">
                    <div class="form-group">
                        <label for="forename">By Forename</label>
                        <input type="text" name="forename" class="form-control" id="" placeholder="By Forename">
                    </div>
                    <div class="form-group">
                        <label for="middleName1">By First Middle Name</label>
                        <input type="text" name="middleName1" class="form-control" id="" placeholder="By First Middle Name">
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="form-group">
                        <label for="middleName2">By Second Middle Name</label>
                        <input type="text" name="middleName2" class="form-control" id="" placeholder="By Second Middle Name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">By Surname</label>
                        <input type="text" name="lastName" class="form-control" id="" placeholder="By Surname">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="submit" class="btn btn-primary form-control" name="studentSearch" value="Search" id="">
                <!-- <p class="help-block">Help text here.</p> -->
            </div>
        </form>
    </div>
</div>

<div class=container>
    <table class="table">
        <caption>Students</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Foername</th>
                <th>Surname</th>
                <th>Year Group</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 0;
                foreach($data as $student)
                {
                    $i++;
                    //print_r($student);
                    echo '
                            <tr>
                                <th scope="row">'.$i.'</th>
                                <td><a href="https://www.galeadigital.com/students/viewStudent/'.$student['UserId'].'">'.$student['Forename'].'</a></td>
                                <td><a href="https://www.galeadigital.com/students/viewStudent/'.$student['UserId'].'">'.$student['LastName'].'</a></td>
                                <td><a href="https://www.galeadigital.com/students/viewStudent/'.$student['UserId'].'">'.$student['nCyearActual'].'</a></td>
                            </tr>';
                }
            ?>
        </tbody>
    </table>
</div>

<?php include_once('../app/views/templates/footer.php') ?>