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
                <h1>Add New Course</h1>
            </div>
            <div class="col-lg-4">
                <!-- Add Course Form -->
                <form class="form-inline" action="" method="POST">
                    <hr>
                    <div class="form-group">
                        <label for="courseName">Course Name</label>
                        <input type="text" name="courseName" class="form-control" id="" placeholder="Course Name">
                        <span class="error"><?php echo $data['error']['courseName'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="teacherId">Teacher ID</label>
                        <input type="text" name="teacherId" class="form-control" id="" placeholder="Teacher ID">
                        <span class="error"><?php echo $data['error']['teacherId'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="subjectId">Subject ID</label>
                        <input type="text" name="subjectId" class="form-control" id="" placeholder="Subject ID">
                        <span class="error"><?php echo $data['error']['subjectId'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="courseYear">Course Year</label>
                        <select class="form-control" name="courseYear">
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
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
                        <span class="error"><?php echo $data['error']['courseYear'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="startDate">Course start date</label>
                        <input type="date" name="startDate" class="form-control" id="" placeholder="Start Date">
                        <span class="error"><?php echo $data['error']['startDate'] ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="room">Room</label>
                        <input type="text" name="room" class="form-control" id="" placeholder="Room">
                        <span class="error"><?php echo $data['error']['room'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="sessionsTotal">Number of sessions</label>
                        <input type="text" name="sessionsTotal" class="form-control" id="" placeholder="Number of sessions">
                        <span class="error"><?php echo $data['error']['sessionsTotal'] ?></span>
                    </div>
                    <!-- The Button -->            
                    <div class="form-group">
                        <label for=""></label>
                        <input type="submit" class="btn btn-primary form-control" name="addCourse" value="Add Course" id="">
                        <!-- <p class="help-block">Help text here.</p> -->
                    </div>  
                </form>
                <!-- End of form -->
            </div>
        </div>
    </div>

  <?php include_once('../app/views/templates/footer.php') ?>