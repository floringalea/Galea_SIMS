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
    <div class="row">
        <div class="col-md-2">
            <h4>Student Photo</h4>
        </div>
        <div class="col-md-2">
            <h4>Forename </h4><p><?php //echo($data['student']->getForename()); ?></p>
            <h4>Middlename(s)</h4>
            <h4>Surname </h4>
            <h4>Date of birth</h4>
            <h4>UPN </h4>
            <h4>UCI </h4>
        </div>
        <div class="col-md-2">
            <p><?php echo $data['student']->getForename(); ?></p>
            <p><?php echo($data['student']->getMiddleName1().", ".$data['student']->getMiddleName2()); ?></p>
            <p><?php echo($data['student']->getLastName()); ?></p>
            <p><?php echo($data['student']->getUPN()); ?></p>
            <p><?php echo($data['student']->getUCI()); ?></p>
        </div>
        <div class="col-md-6">
           
        </div>
    </div>
</div>