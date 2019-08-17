<?php include_once('../app/views/templates/header.php') ?>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<h2>Staff Admin Dashboard</h2>
<hr>
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
<h2>Staff Admin Dashboard</h2>
<hr>
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
<h2>Staff Admin Dashboard</h2>
<hr>
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
<div class="sidebar">
    <a href="https://www.galeadigital.com/dashboard/index"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="https://www.galeadigital.com/staff/findStaff"><i class="fa fa-fw fa-search"></i> Find Staff</a>
    <a href="https://www.galeadigital.com/staff/addTeacher"><i class="fa fa-fw fa-user"></i> Add Teacher</a>
    <a href="https://www.galeadigital.com/staff/addStaff"><i class="fa fa-fw fa-user"></i> Add Staff</a>
    <a href="https://www.galeadigital.com/userauth/logout"><i class="fa fa-fw fa-lock"></i> Logout</a>
</div>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
<div class="container-fluid">
   
    <div class="row">
        <form class="" action="" method="POST">
            <div class="col-lg-6">
				<h2>Staff Admin Dashboard</h2>
            </div>
			<!-- Search -->
			<div class="col-lg-5">
				<input type="text" name="stafSearch" class="form-control" id="" placeholder="Search Staff">
            </div>
			<div class="col-lg-1">
				<input type="submit" class="btn btn-primary form-control" name="staffSearch" value="Search" id="">
            </div>
			<!-- End of Search -->
        </form>
    </div>
</div>

<div class="container-fluid">
	<!-- Staff table -->
    <table class="table">
        <caption>Staff</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Forename</th>
                <th>Surname</th>
                <th>Start Date</th>
                <th>Position</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                foreach($data as $admin)
                {
                    echo '
                            <tr>
                                <th scope="row">'.$i.'</th>
                                <td><a href="https://www.galeadigital.com/students/viewStudent/'.$admin['UserId'].'">'.$admin['Forename'].'</a></td>
                                <td><a href="https://www.galeadigital.com/students/viewStudent/'.$admin['UserId'].'">'.$admin['LastName'].'</a></td>
                                <td><a href="https://www.galeadigital.com/students/viewStudent/'.$admin['UserId'].'">'.$admin['startDate'].'</a></td>
								<td><a href="https://www.galeadigital.com/students/viewStudent/'.$admin['UserId'].'">'.$admin['position'].'</a></td>
                            </tr>';
                    $i++;
                }
            ?>
        </tbody>
    </table>
</div>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
<?php include_once('../app/views/templates/footer.php') ?>