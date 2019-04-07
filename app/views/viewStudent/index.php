<?php include_once('../app/views/templates/header.php') ?>

<div class="sidebar">
    <a href="https://www.galeadigital.com/dashboard/index"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="https://www.galeadigital.com/students/addStudent"><i class="fa fa-fw fa-user"></i> Add Student</a>
    <a href="https://www.galeadigital.com/students/importStudent"><i class="fa fa-fw fa-download"></i> Import Student(s)</a>
    <a href="https://www.galeadigital.com/attendance/index"><i class="fa fa-fw fa-check"></i> Attendance</a>
    <a href="https://www.galeadigital.com/asessments/index"><i class="fa fa-fw fa-pencil"></i> Assessments</a>
    <a href="https://www.galeadigital.com/userauth/logout"><i class="fa fa-fw fa-lock"></i> Logout</a>
</div>

<div class=container-fluid>
    <div class="col-md-4">
        <h4>Student Photo</h4>
    </div>
    <div class="col-md-8">
        <h4>Student Details</h4>
        <p><?php var_dump($data); ?></p>
    </div>
</div>