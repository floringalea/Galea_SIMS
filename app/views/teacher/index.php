
<?php include_once('../app/views/templates/header.php') ?>

<h2>Hello <?php echo($data['thisUser']->getForeName()) ?>! Welcome to SIMS Dashboard!</h2>
<hr>
<a href="https://www.galeadigital.com/userauth/logout">Logout</a>

<?php include_once('../app/views/templates/footer.php') ?>