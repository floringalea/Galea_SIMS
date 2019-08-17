<?php include_once('../app/views/templates/header.php') ?>

<div class="sidebar">
    <a href="https://www.galeadigital.com/dashboard/index"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="https://www.galeadigital.com/students/addStudent"><i class="fa fa-fw fa-user"></i> Add Student</a>
    <a href="https://www.galeadigital.com/students/importStudent"><i class="fa fa-fw fa-download"></i> Import Student(s)</a>
    <a href="https://www.galeadigital.com/userauth/logout"><i class="fa fa-fw fa-lock"></i> Logout</a>
</div>

<div class="container-fluid">
   
    <div class="row">
        <form class="" action="" method="POST">
            <div class="col-lg-6">
				<h2>Students Admin Dashboard</h2>
            </div>
			<!-- Search -->
			<div class="col-lg-5">
				<input type="text" name="studSearch" class="form-control" id="" placeholder="Search Students">
            </div>
			<div class="col-lg-1">
				<input type="submit" class="btn btn-primary form-control" name="studentSearch" value="Search" id="">
            </div>
			<!-- End of Search -->
        </form>
    </div>
</div>

<div class="container-fluid">
	<!-- Students table -->
    <table class="table">
        <caption>Students</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Foername</th>
                <th>Surname</th>
                <th>Year Group</th>
                <th>Form Group</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                foreach($data as $student)
                {
                    echo '
                            <tr>
                                <th scope="row">'.$i.'</th>
                                <td><a href="https://www.galeadigital.com/students/viewStudent/'.$student['UserId'].'">'.$student['Forename'].'</a></td>
                                <td><a href="https://www.galeadigital.com/students/viewStudent/'.$student['UserId'].'">'.$student['LastName'].'</a></td>
                                <td><a href="https://www.galeadigital.com/students/viewStudent/'.$student['UserId'].'">'.$student['nCyearActual'].'</a></td>
                            </tr>';
                    $i++;
                }
            ?>
        </tbody>
    </table>
</div>

<?php include_once('../app/views/templates/footer.php') ?>