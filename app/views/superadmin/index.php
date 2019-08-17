<?php include_once('../app/views/templates/header.php') ?>

        <h2>Hello <?php echo($data['thisUser']->getForeName()) ?>! Welcome to SIMS Dashboard!</h2>
        
        <div class="sidebar">
            <a href="https://www.galeadigital.com/staff/index"><i class="fa fa-fw fa-user"></i> Staff</a>
            <a href="https://www.galeadigital.com/students/index"><i class="fa fa-fw fa-child"></i> Students</a>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            <a href="#Admin"><i class="fa fa-fw fa-wrench"></i> Admin</a>
            <a href="#Curriculum"><i class="fa fa-fw fa-book"></i> Curriculum</a>
=======
            <a href="https://www.galeadigital.com/curriculum/index"><i class="fa fa-fw fa-book"></i> Curriculum</a>
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
            <a href="https://www.galeadigital.com/curriculum/index"><i class="fa fa-fw fa-book"></i> Curriculum</a>
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
            <a href="https://www.galeadigital.com/curriculum/index"><i class="fa fa-fw fa-book"></i> Curriculum</a>
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
            <a href="https://www.galeadigital.com/curriculum/index"><i class="fa fa-fw fa-book"></i> Curriculum</a>
>>>>>>> parent of d0c237b... Created 'FormGroup' class
            <a href="#Timetables"><i class="fa fa-fw fa-calendar"></i> Timetables</a>
            <a href="https://www.galeadigital.com/userauth/logout"><i class="fa fa-fw fa-lock"></i> Logout</a>
        </div>
        
        <hr>
        <p><?php include_once('../app/views/templates/monthCalendar.php') ?></p>
        <hr>


<?php include_once('../app/views/templates/footer.php') ?>