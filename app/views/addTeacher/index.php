<?php include_once('../app/views/templates/header.php') ?>

    <div class="sidebar">
        <a href="https://www.galeadigital.com/dashboard/index"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="https://www.galeadigital.com/staff/"><i class="fa fa-fw fa-wrench"></i> Staff</a>
        <a href="https://www.galeadigital.com/students/index"><i class="fa fa-fw fa-wrench"></i> Students</a>
        <a href="#Admin"><i class="fa fa-fw fa-user"></i> Admin</a>
        <a href="#Timetables"><i class="fa fa-fw fa-envelope"></i> Timetables</a>
    </div>

    <div class="container">

    <div class="row">

    <div class="col-lg-12">
        <h1>Add Teacher</h1>
    </div>

    <div class="col-lg-4">
    <form class="form-inline" action="" method="post">
        <hr>
        <div class="form-group">
                <label for="">Forename</label>
                <input type="text" name="forename" class="form-control" id="" placeholder="Forename">
                <span class="error"><?php echo $data['error']['forename'] ?></span>
        </div>

        <div class="form-group">
            <label for="">First Middle Name</label>
            <input type="text" name="middleName1" class="form-control" id="" placeholder="First Middle Name">
            <!-- <p class="help-block">Help text here.</p> -->
        </div>

        <div class="form-group">
            <label for="">Second Middle Name</label>
            <input type="text" name="middleName2" class="form-control" id="" placeholder="Second Middle Name">
            <!-- <p class="help-block">Help text here.</p> -->
        </div>

        <div class="form-group">
            <label for="">Surname</label>
            <input type="text" name="lastName" class="form-control" id="" placeholder="Surname">
            <span class="error"><?php echo $data['error']['lastName'] ?></span>
        </div>

        <div class="form-group">
            <label for="">Gender</label>
            <select class="form-control" name="gender">
                <option>M</option>
                <option>F</option>
                <?php
                    /*$exc=mysqli_query($conn,"SELECT * FROM class");
                    while($cls=mysqli_fetch_assoc($exc)){
                    ?>
                    <option value="<?=$cls['id']?>">
                        <?=$cls['class_name']?>
                    </option>
                    <?php
                    }*/
                ?>
            </select>
            <span class="error"><?php echo $data['error']['gender'] ?></span>
        </div>

        <div class="form-group">
            <label for="">Date of Birth</label>
            <input type="date" name="DOB" class="form-control" id="" placeholder="Date of Birth">
            <span class="error"><?php echo $data['error']['DOB'] ?></span>
        </div>

        <div class="form-group">
            <label for="">Subject</label>
            <input type="text" name="subject" class="form-control" id="" placeholder="Subject">
            <span class="error"><?php echo $data['error']['subject'] ?></span>
        </div>

        <div class="form-group">
            <label for="">Start Date</label>
            <input type="date" name="startDate" class="form-control" id="" placeholder="Start Date">
            <span class="error"><?php echo $data['error']['startDate'] ?></span>
        </div>

        <div class="form-group">
        <label for=""></label>
        <input type="submit" class="btn btn-primary form-control" name="addTeacher" value="Add Teacher" id="">
        <!-- <p class="help-block">Help text here.</p> -->
        </div>
        
    </form>

  <?php include_once('../app/views/templates/footer.php') ?>