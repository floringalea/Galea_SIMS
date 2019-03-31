<?php

class App
<<<<<<< HEAD
{   
    // Default controller
    protected $controller = 'userAuth';

    // Default method
    protected $method = 'index';

    // Parameters passed
=======
{
    protected $controller = 'home';

    protected $method = 'index';

>>>>>>> 43ba814043711368a5a1eccccbdb16eea1678fd3
    protected $params = [];

    public function __construct()
    {
<<<<<<< HEAD
        // Get url components
        $urlContent = $this->parseUrl();

        /*
            If the first parameter passed in the url is a valid controller and user is authorised, set the
            App's controller to the one that's been requested, otherwise go with the default controller (auth).
        */
        if(file_exists('../app/controllers/' . $urlContent[0] . '.php'))
        {
            $this->controller = $urlContent[0];
            unset($urlContent[0]);
        }

        // Include the controller
        require_once '../app/controllers/' . $this->controller . '.php';

        // Instantiate the controller
        $this->controller = new $this->controller;

        /*
            If a second parameter is passed in the url, is a valid method and the user is authorised, set the
            App's method to the one passed in the url. Otherwise, go with the default method (index).
        */
        if(isset($urlContent[1]))
        {
            if(method_exists($this->controller, $urlContent[1]))
            {
                $this->method = $urlContent[1];
                unset($urlContent[1]);
            }
        }

        // If there are any more parameters passed and the user is authorised, add the parameters to the app
        if (isset($_SESSION['isAuth']))
        {
            $this->params = $urlContent ? array_values($urlContent) : [];
        }
        
        // Construct the view once parameters established
=======
        $url = $this->parseUrl();

        if(file_exists('../app/controllers/' . $url[0] . '.php'))
        {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        if(isset($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

>>>>>>> 43ba814043711368a5a1eccccbdb16eea1678fd3
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl()
    {
<<<<<<< HEAD
        if(isset($_GET['url']))
        {
            return $urlContent = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
=======
        if(isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
>>>>>>> 43ba814043711368a5a1eccccbdb16eea1678fd3
        }
    }
}