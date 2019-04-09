<?php include_once('../app/views/templates/header.php') ?>

<div class="sidebar">
	<a href="https://www.galeadigital.com/students/index"><i class="fa fa-fw fa-arrow-left"></i> Back to Students</a>
    <a href="https://www.galeadigital.com/dashboard/index"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="https://www.galeadigital.com/attendance/index"><i class="fa fa-fw fa-check"></i> Attendance</a>
    <a href="https://www.galeadigital.com/asessments/index"><i class="fa fa-fw fa-pencil"></i> Assessments</a>
    <a href="https://www.galeadigital.com/userauth/logout"><i class="fa fa-fw fa-lock"></i> Logout</a>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
            <h4>Student Photo</h4>
        </div>
        <div class="col-md-2 text-right">
            <p>Forename: </p>
            <p>Middlename(s): </p>
            <p>Surname: </p>
            <p>Date of birth: </p>
            <p>UPN: </p>
            <p>UCI: </p>
			<p>Year Group: </p>
			
        </div>
        <div class="col-md-2 text-left">
            <p><?php echo $data['student']->getForename(); ?></p>
            <p>
				<!-- If two middlenames, show both and add a comma in between -->
				<!-- If no middle name, echo a blank line in its place. -->
				<?php
					if($data['student']->getMiddleName1() != "" && $data['student']->getMiddleName2() != "")
					{	
						echo($data['student']->getMiddleName1().", ".$data['student']->getMiddleName2());
					}
					else if ($data['student']->getMiddleName1() != "")
					{
						echo($data['student']->getMiddleName1());
					}
					else
					{
						echo("<br />");
					}
				?>
			</p>
            <p><?php echo($data['student']->getLastName()); ?></p>
			<p><?php echo($data['student']->getDob()); ?></p>
            <p><?php echo($data['student']->getUPN()); ?></p>
            <p><?php echo($data['student']->getUCI()); ?></p>
			<p><?php echo($data['student']->getNCyearActual()); ?></p>
        </div>
        <div class="col-md-7">
			
        </div>
    </div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<caption>Student Form Group</caption>
				<thead>
					<tr>
						<th>Form Group</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
					</tr>
				</tbody>
			</table>
        </div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<caption>Student Contact</caption>
				<thead>
					<tr>
						<th>Email Address</th>
						<th>Address Type</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $data['contact']->getEmailAddress(); ?></td>
						<td><?php echo $data['contact']->getAddrType(); ?></td>
					</tr>
				</tbody>
			</table>
        </div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<thead>
					<tr>
						<th>Home Telephone Number</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $data['contact']->getHomePhone(); ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<table class="table">
				<thead>
					<tr>
						<th>Mobile Telephone Number</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $data['contact']->getMobPhone(); ?></td>
					</tr>
				</tbody>
			</table>
        </div>
	</div>
</div>

<?php include_once('../app/views/templates/footer.php') ?>