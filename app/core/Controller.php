<?php

class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '/index.php';
    }
<<<<<<< HEAD

    public function checkInput($input)
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

=======
>>>>>>> 43ba814043711368a5a1eccccbdb16eea1678fd3
}