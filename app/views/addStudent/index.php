<?php include_once('../app/views/templates/header.php') ?>

    <div class="sidebar">
        <a href="https://www.galeadigital.com/dashboard/index"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="https://www.galeadigital.com/staff/index"><i class="fa fa-fw fa-wrench"></i> Staff</a>
        <a href="https://www.galeadigital.com/students/index"><i class="fa fa-fw fa-wrench"></i> Students</a>
        <a href="#Admin"><i class="fa fa-fw fa-user"></i> Admin</a>
        <a href="#Timetables"><i class="fa fa-fw fa-envelope"></i> Timetables</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Add New Student</h1>
            </div>
            <div class="col-lg-4">
                <!-- Add Student Form -->
                <form class="form-inline" action="" method="POST">
                    <hr>
                    <div class="form-group">
                        <label for="forename">Forename</label>
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
                        <label for="">UPN</label>
                        <input type="text" name="UPN" class="form-control" id="" placeholder="UPN">
                        <span class="error"><?php echo $data['error']['UPN'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">UCI</label>
                        <input type="text" name="UCI" class="form-control" id="" placeholder="UCI">
                        <span class="error"><?php echo $data['error']['UCI'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Former UPN</label>
                        <input type="text" name="formerUPN" class="form-control" id="" placeholder="Former UPN">
                        <!-- <p class="help-block">Help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label for="">Former Surname</label>
                        <input type="text" name="formerSN" class="form-control" id="" placeholder="Former Surname">
                        <!-- <p class="help-block">Help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label for="">Preferred Surname</label>
                        <input type="text" name="prefSN" class="form-control" id="" placeholder="Preferred Surname">
                        <!-- <p class="help-block">Help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label for="">Preferred First Name</label>
                        <input type="text" name="prefFN" class="form-control" id="" placeholder="Preferred First Name">
                        <!-- <p class="help-block">Help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label for="">Year Group</label>
                        <input type="text" name="nCyearActual" class="form-control" id="" placeholder="Year Group">
                        <span class="error"><?php echo $data['error']['nCyearActual'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Ethnicity</label>
                        <input type="text" name="ethnicity" class="form-control" id="" placeholder="Ethnicity">
                        <span class="error"><?php echo $data['error']['ethnicity'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Ethnicity Source</label>
                        <input type="text" name="ethnicitySource" class="form-control" id="" placeholder="Ethnicity Source">
                        <span class="error"><?php echo $data['error']['ethnicitySource'] ?></span>
                    </div>
                    <!-- The Button -->            
                    <div class="form-group">
                        <label for=""></label>
                        <input type="submit" class="btn btn-primary form-control" name="addStudent" value="Add Student" id="">
                        <!-- <p class="help-block">Help text here.</p> -->
                    </div>  
                </form>
                <!-- End of form -->
            </div>
        </div>
    </div>

  <?php include_once('../app/views/templates/footer.php') ?>