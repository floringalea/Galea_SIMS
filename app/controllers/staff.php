<?php
session_start();

class Staff extends Controller
{   
    // Any parameters to be passed when calling a view
    private $data;

    function __construct() 
    {
        // Check to see who is logged in and requesting this
        $userRole = $_SESSION['userRole'];
        // User must have role 'SA' or 'A' to access this function
        if($userRole != "SA" && $userRole != "A") 
        {
            $this->data['error'] = "Page not found.";
            parent::view('error', $this->data);// If not authorized - call error view and pass on error
            exit();// Stop running the Staff controller
        }

        // Prepare the form for validation - mark the mandatory fields
        $this->data['error']['forename'] = "*";
        $this->data['error']['lastName'] = "*";
        $this->data['error']['gender'] = "*";
        $this->data['error']['DOB'] = "*";
        $this->data['error']['role'] = "*";
        $this->data['error']['ethnicity'] = "*";
        $this->data['error']['ethnicitySource'] = "*";
        $this->data['error']['subject'] = "*";
        $this->data['error']['position'] = "*";
        $this->data['error']['startDate'] = "*";

        $this->data['error']['houseNo'] = "*";
        //$this->data['error']['flatNo'] = "*";
        $this->data['error']['streetName'] = "*";
        $this->data['error']['postCode'] = "*";
        //$this->data['error']['countyName'] = "*";
        $this->data['error']['townName'] = "*";
        $this->data['error']['streetName'] = "*";
        $this->data['error']['countryName'] = "*";
        $this->data['error']['staffEmail'] = "*";
        $this->data['error']['homeTelNo'] = "*";
        $this->data['error']['mobTelNo'] = "*";
        
    }

    public function index()
    {
        // Main function of the Students Controller
        parent::view('staffAdminDash', $this->data);
    }

    public function addStaff()
    {
        if (isset($_POST['addStaff']) && $_POST['addStaff'] === "Add Staff")
        {
            // Load and instantiate the user model
            $this->admin = parent::model('user');
            $this->admin = parent::model('admin');

            /*   Beginning of input validation   */
            $inputValid = true;
            // Check fields and stop validation if any errors
            if (empty($_POST['forename']))
            {
                $inputValid = false;
                $this->data['error']['forename'] = "User field cannot empty";
            }
            if (empty($_POST['lastName']))
            {
                $inputValid = false;
                $this->data['error']['lastName'] = "Last Name field cannot empty";
            }
            // Non Mandatory personal details fields
            if (!empty($_POST['middleName1'])) { $this->admin->setMiddleName1(parent::checkInput($_POST['middleName1'])); }
            if (!empty($_POST['middleName2'])) { $this->admin->setMiddleName2(parent::checkInput($_POST['middleName2'])); }
            if (empty($_POST['gender']))
            {
                $inputValid = false;
                $this->data['error']['gender'] = "Gender field cannot empty";
            }
            if (empty($_POST['role']))
            {
                $inputValid = false;
                $this->data['error']['role'] = "Gender field cannot empty";
            }
            if (empty($_POST['DOB']))
            {
                $inputValid = false;
                $this->data['error']['DOB'] = "Date Of Birth field cannot empty";
            }

            if (empty($_POST['houseNo']))
            {
                $inputValid = false;
                $this->data['error']['houseNo'] = "House Number field cannot empty";
            }
            // Non Mandatory contact details fields0
            if (!empty($_POST['flatNo'])) { $this->admin->setMiddleName1(parent::checkInput($_POST['flatNo'])); }
            if (!empty($_POST['countyName'])) { $this->admin->setMiddleName2(parent::checkInput($_POST['countyName'])); }
            
            if (empty($_POST['streetName']))
            {
                $inputValid = false;
                $this->data['error']['streetName'] = "Street Name field cannot empty";
            }
            if (empty($_POST['postCode']))
            {
                $inputValid = false;
                $this->data['error']['postCode'] = "Post Code field cannot empty";
            }
            if (empty($_POST['townName']))
            {
                $inputValid = false;
                $this->data['error']['townName'] = "Town field cannot empty";
            }
            if (empty($_POST['countryName']))
            {
                $inputValid = false;
                $this->data['error']['countryName'] = "Country field cannot empty";
            }
            if (empty($_POST['staffEmail']))
            {
                $inputValid = false;
                $this->data['error']['staffEmail'] = "Email field cannot empty";
            }
            if (empty($_POST['homeTelNo']))
            {
                $inputValid = false;
                $this->data['error']['homeTelNo'] = "Home telephone number field cannot empty";
            }
            if (empty($_POST['mobTelNo']))
            {
                $inputValid = false;
                $this->data['error']['mobTelNo'] = "Mobile telephone number field cannot empty";
            }
            /*    End of input validation   */

            if ($inputValid === true)
            {
                // 1. Build User object using POST data
                $this->admin->setForename(parent::checkInput($_POST['forename']));
                $this->admin->setLastName(parent::checkInput($_POST['lastName']));
                $this->admin->setGender(parent::checkInput($_POST['gender']));
                $this->admin->setDob($_POST['DOB']);
                $this->admin->setRole(parent::checkInput($_POST['role']));
                $this->admin->genUsername();
                $this->admin->setPassHash(md5("Password1"));
                $this->admin->calcAge();
                $this->admin->calcTitle();
                // 2. Add new user record to DB
                $this->admin->addUserToDB();
                // 3. Populate record from DB to get Id (gen in db);
                $this->admin->populateFromDb();
                // 4. Set UserId property on new admin record then add record to Admin table;
                $this->admin->setId($this->admin->getId());
                $this->admin->addAdminToDB();
                // 6. Process complete. Show confirmation.
                parent::view('studentAdded', $this->data);
                exit();// All good, stop script upon showing confirmation
            }
            // If this runs - there were errors when submitting the form
            parent::view('addStaff', $this->data);
        }
        else
        {
            // No POST data - no form submission, load the form 
            parent::view('addStaff', $this->data);
        }
    }

    public function addTeacher()
    {
        if (isset($_POST['addTeacher']) && $_POST['addTeacher'] === "Add Teacher")
        {
            // Load and instantiate the user & student models
            $this->teacher = parent::model('user');
            $this->teacher = parent::model('teacher');

            /**
             * Beginning of input validation
             */
            $inputValid = true;
            // Check fields and stop validation if any errors
            if (empty($_POST['forename']))
            {
                $inputValid = false;
                $this->data['error']['forename'] = "User field cannot empty";
            }
            if (empty($_POST['lastName']))
            {
                $inputValid = false;
                $this->data['error']['lastName'] = "Last Name field cannot empty";
            }
            // Non Mandatory fields
            if (!empty($_POST['middleName1'])) { $this->teacher->setMiddleName1(parent::checkInput($_POST['middleName1'])); }
            if (!empty($_POST['middleName2'])) { $this->teacher->setMiddleName2(parent::checkInput($_POST['middleName2'])); }
            if (empty($_POST['gender']))
            {
                $inputValid = false;
                $this->data['error']['gender'] = "Gender field cannot empty";
            }
            if (empty($_POST['DOB']))
            {
                $inputValid = false;
                $this->data['error']['DOB'] = "Date Of Birth field cannot empty";
            }
            if (empty($_POST['subject']))
            {
                $inputValid = false;
                $this->data['error']['subject'] = "Subject field cannot empty";
            }
            if (empty($_POST['startDate']))
            {
                $inputValid = false;
                $this->data['error']['startDate'] = "Start Date field cannot empty";
            }
            /**
             * End of input validation
             */

            if ($inputValid === true)
            {
                // 1. Build user object using POST data
                $this->teacher->setForename(parent::checkInput($_POST['forename']));
                $this->teacher->setLastName(parent::checkInput($_POST['lastName']));
                $this->teacher->setGender(parent::checkInput($_POST['gender']));
                $this->teacher->setDob($_POST['DOB']);
                $this->teacher->setRole("S");
                $this->teacher->genUsername();
                $this->teacher->setPassHash(md5("Password1"));
                $this->teacher->calcAge();
                $this->teacher->calcTitle();
                // 2. Add user to DB
                $this->teacher->addUserToDB();
                // 3. Get new User ID from DB;
                $this->teacher->populateFromDb();
                // 4. Build new Teacher object using POST data;
                $this->teacher->setUserID($this->teacher->getId());
                $this->teacher->setStartDate($_POST['startDate']);
                $this->teacher->setSubjectId(intval($_POST['subject']));
                // 5. Add Student to DB;
                $this->teacher->addTeacherToDB();
                // 6. Process complete. Show confirmation.
                parent::view('studentAdded', $this->data);
                exit();// All good, stop script upon showing confirmation
            }
            // If this runs - there were errors when submitting the form
            parent::view('addTeacher', $this->data);
        }
        else
        {
            // No POST data - no form submission, load the form 
            parent::view('addTeacher', $this->data);
        }
    }
}