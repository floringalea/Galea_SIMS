<?php include_once('../app/views/templates/header.php') ?>

        <h2>Hello <?php echo($data['thisUser']->getForeName()) ?>! Welcome to SIMS Dashboard!</h2>
        <hr>
        <a href="http://localhost/Galea_SIMS/public/userauth/logout">Logout</a>

<?php include_once('../app/views/templates/footer.php') ?>