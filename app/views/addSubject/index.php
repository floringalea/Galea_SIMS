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
                <h1>Add New Subject</h1>
            </div>
            <div class="col-lg-4">
                <!-- Add Course Form -->
                <form class="form-inline" action="" method="POST">
                    <hr>
                    <div class="form-group">
                        <label for="subjectName">Subject Name</label>
                        <input type="text" name="subjectName" class="form-control" id="" placeholder="Subject Name">
                        <span class="error"><?php echo $data['error']['subjectName'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="subjectYear">Subject Year</label>
                        <select class="form-control" name="subjectYear">
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
                        <span class="error"><?php echo $data['error']['subjectYear'] ?></span>
                    </div>
                    
                    <!-- The Button -->            
                    <div class="form-group">
                        <label for=""></label>
                        <input type="submit" class="btn btn-primary form-control" name="addSubject" value="Add Subject" id="">
                        <!-- <p class="help-block">Help text here.</p> -->
                    </div>  
                </form>
                <!-- End of form -->
            </div>
        </div>
    </div>

  <?php include_once('../app/views/templates/footer.php') ?>