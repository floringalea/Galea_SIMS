<?php
session_start();

class Dashboard extends Controller
{
    public function index()
    {
        // If not logged in, head back to the userAuth controller
        if (!isset($_SESSION['isAuth']))
        {
            header("Location: /userAuth/index");
        }

        $data['thisUser'] = parent::model('user');
        $data['thisUser']->setUserName($_SESSION['user']);
        $data['thisUser']->setPassHash($_SESSION['passHash']);
        $data['thisUser']->populateFromDb();
        
        // Passing some parameters from here to the calendar could help specialize the calendar
        $data['thisMonthCalendar'] = parent::model('monthCalendar');
        
        /*
        |   Establish role of user
        |   Pass all the data to a call to the corresponding view
        */
        switch ($data['thisUser']->getRole())
        {
            case 'SA':
                $_SESSION['userRole'] = "SA";
                parent::view('superadmin', $data);
                break;
            case 'A':
                $_SESSION['userRole'] = "A";
                parent::view('admin', $data);
                break;
            case 'T':
                $_SESSION['userRole'] = "T";
                parent::view('teacher', $data);
                break;
            case 'S':
                $_SESSION['userRole'] = "S";
                parent::view('student', $data);
                break;
            case 'G':
                $_SESSION['userRole'] = "G";
                parent::view('student', $data);
                break;
        }
    }
}