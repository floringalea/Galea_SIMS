<?php include_once('../app/views/templates/header.php') ?>

<div class="sidebar">
    <a href="https://www.galeadigital.com/dashboard/index"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="https://www.galeadigital.com/curriculum/regAttendance"><i class="fa fa-fw fa-check-square-o"></i> Register Attendance</a>
    <a href="https://www.galeadigital.com/curriculum/addCourse"><i class="fa fa-fw fa-edit"></i> Add Course</a>
    <a href="https://www.galeadigital.com/curriculum/addSubject"><i class="fa fa-fw fa-book"></i> Add Subject</a>
    <a href="https://www.galeadigital.com/curriculum/addAssessment"><i class="fa fa-fw fa-pencil"></i> Add Assessment</a>
    <a href="https://www.galeadigital.com/curriculum/viewAssessments"><i class="fa fa-fw fa-pencil-square"></i> View Assessments</a>
    <a href="https://www.galeadigital.com/dashboard/index"><i class="fa fa-fw fa-arrow-left"></i> Back to Dashboard</a>
    <a href="https://www.galeadigital.com/userauth/logout"><i class="fa fa-fw fa-lock"></i> Logout</a>
</div>

<div class="container-fluid">
   
    <div class="row">
        <form class="" action="" method="POST">
            <div class="col-lg-6">
				<h2>Curriculum Dashboard</h2>
            </div>
			<!-- Search -->
			<div class="col-lg-5">
				<input type="text" name="currSearch" class="form-control" id="" placeholder="Search for courses and subjects">
            </div>
			<div class="col-lg-1">
				<input type="submit" class="btn btn-primary form-control" name="curriculumSearch" value="Search" id="">
            </div>
			<!-- End of Search -->
        </form>
    </div>
</div>

<div class="container-fluid">
	<!-- Staff table -->
    <table class="table">
        <caption>Courses</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Start Date</th>
                <th>Teacher</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                foreach($data['courses'] as $course)
                {
                    echo '
                            <tr>
                                <th scope="row">'.$i.'</th>
                                <td>'.$course['Name'].'</td>
                                <td>'.$course['SubjectId'].'</td>
                                <td>'.$course['StartDate'].'</td>
								<td>'.$course['TeacherId'].'</td>
                            </tr>';
                    $i++;
                }
            ?>
        </tbody>
    </table>

    <table class="table">
        <caption>Subjects</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Year Group</th>
                <th>Subject ID</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                foreach($data['subjects'] as $subjects)
                {
                    echo '
                            <tr>
                                <th scope="row">'.$i.'</th>
                                <td>'.$subjects['SubjectName'].'</td>
                                <td>'.$subjects['Year'].'</td>
                                <td>'.$subjects['SubjectId'].'</td>
                            </tr>';
                    $i++;
                }
            ?>
        </tbody>
    </table>
</div>

<?php include_once('../app/views/templates/footer.php') ?>