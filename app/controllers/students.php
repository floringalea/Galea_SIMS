<?php
session_start();

class Students extends Controller
{   
    // Any parameters to be passed when calling a view
    protected $data, $student, $user;

    function __construct()
    {
        // Check to see who is logged in and requesting this
        $userRole = $_SESSION['userRole'];
        // User must have role 'SA' or 'A' to access this function
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if($userRole != "SA" && $userRole != "A") 
        {
            //exit();
            $this->data['error'] = "Page not found.";
=======
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
        if($userRole != "SA" && $userRole != "A" && $userRole != "T") 
        {
            //exit();
            $this->data['error'] = "You are not authorized to view this page.";
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
        if($userRole != "SA" && $userRole != "A") 
        {
            //exit();
            $this->data['error'] = "Page not found.";
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
        if($userRole != "SA" && $userRole != "A") 
        {
            //exit();
            $this->data['error'] = "Page not found.";
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
            parent::view('error', $this->data);// If not authorized - call error view and pass on error
            exit();// Stop running the Students controller
        }
    
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
        // Prepare the form for validation - mark the mandatory fields
        $this->data['error']['forename'] = "*";
        $this->data['error']['lastName'] = "*";
        $this->data['error']['gender'] = "*";
        $this->data['error']['DOB'] = "*";
        $this->data['error']['UPN'] = "*";
        $this->data['error']['UCI'] = "*";
        $this->data['error']['nCyearActual'] = "*";
        $this->data['error']['ethnicity'] = "*";
        $this->data['error']['ethnicitySource'] = "*";
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
        // Prepare the Add Student form for validation - mark the mandatory fields
        $this->data['error'] = ['forename' => '*',
								'lastName' => '*',
								'gender' => '*',
								'DOB' => '*',
								'UPN' => '*',
								'UCI' => '*',
								'nCyearActual' => '*',
								'ethnicity' => '*',
								'ethnicitySource' => '*' ];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
    }

    public function index()
    {
        // Main function of the Students Controller
        // Get students from DB and display them within the StudentAdminDash view
        $finder = parent::model("user");
        $finder = parent::model("finder");
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
        // Get all students from DB
        $studData = $finder->getStudentUsersFromDB();
        // Pass them on to the StudentAdminDash view
        parent::view('studentAdminDash', $studData);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
        
		if(isset($_POST['studentSearch']))
		{
			$studData = $finder->searchForStudent($_POST['studSearch']);
			parent::view('studentAdminDash', $studData);
		}
		else
		{
			// Get all students from DB - if no search has been performed
			$studData = $finder->getStudentUsersFromDB();
			// Pass them on to the StudentAdminDash view
			parent::view('studentAdminDash', $studData);
		}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
    }

    public function addStudent()
    {
        if (isset($_POST['addStudent']))
        {
            
            // Load and instantiate the user & student models
            $this->student = parent::model('user');
            $this->student = parent::model('student');

            /*  Beginning of input validation   */
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
            if (!empty($_POST['middleName1'])) { $this->student->setMiddleName1(parent::checkInput($_POST['middleName1'])); }
            if (!empty($_POST['middleName2'])) { $this->student->setMiddleName2(parent::checkInput($_POST['middleName2'])); }
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
            if (empty($_POST['UPN']))
            {
                $inputValid = false;
                $this->data['error']['UPN'] = "UPN field cannot empty";
                // Add format validation here
            }
            else if (strlen($_POST['UPN']) < 10)
            {
                $inputValid = false;
                $this->data['error']['UPN'] = "UPN must be 10 chars long and the first 3 chars must be letters.";
            }
            if (empty($_POST['UCI']))
            {
                $inputValid = false;
                $this->data['error']['UCI'] = "UCI field cannot empty";
            }
            else if (strlen($_POST['UCI']) < 10)
            {
                $inputValid = false;
                $this->data['error']['UCI'] = "UCI must be 13 chars long and the first 5 chars must be letters.";
            }

            // Non Mandatory fields
            if (!empty($_POST['formerUPN'])) { $this->student->setFormerUPN(parent::checkInput($_POST['formerUPN'])); }
            if (!empty($_POST['formerSN'])) { $this->student->setFormerSN(parent::checkInput($_POST['formerSN'])); }
            if (!empty($_POST['prefSN'])) { $this->student->setPrefSN(parent::checkInput($_POST['prefSN'])); }
            if (!empty($_POST['prefFN'])) { $this->student->setPrefFN(parent::checkInput($_POST['prefFN'])); }

            if (empty($_POST['nCyearActual']))
            {
                $inputValid = false;
                $this->data['error']['nCyearActual'] = "Year Group field cannot empty";
            }
            if (empty($_POST['ethnicity']))
            {
                $inputValid = false;
                $this->data['error']['ethnicity'] = "Ethnicity field cannot empty";
            }
            if (empty($_POST['ethnicitySource']))
            {
                $inputValid = false;
                $this->data['error']['ethnicitySource'] = "Ethnicity Source field cannot empty";
            }
            /*  End of input validation   */

            if ($inputValid === true)
            {
                // 1. Build user object using POST data
                $this->student->setForename(parent::checkInput($_POST['forename']));
                $this->student->setlAstName(parent::checkInput($_POST['lastName']));
                $this->student->setGender($_POST['gender']);
                $this->student->setDob($_POST['DOB']);
                $this->student->setRole("S");
                $this->student->genUsername();
                $this->student->setPassHash(md5("Password1"));
                $this->student->calcAge();
                $this->student->calcTitle();
                // 2. Add user to DB
                $this->student->addUserToDB();
                // 3. Get new User ID from DB;
                $this->student->populateFromDb();
                // 4. Build new Student object using POST data;
                $this->student->setUserID($this->student->getId());
                $this->student->setUPN(parent::checkInput($_POST['UPN']));
                $this->student->setUCI(parent::checkInput($_POST['UCI']));
                $this->student->setNCYearActual($_POST['nCyearActual']);
                $this->student->setEthnicity($_POST['ethnicity']);
                $this->student->setEthnicitySource($_POST['ethnicitySource']);
                // 5. Add Student to DB;
                $this->student->addStudentToDB();
                // 6. Process complete. Show confirmation.
                parent::view('studentAdded', $this->data);
                exit();// All good, stop script upon showing confirmation
            }
            // If this runs - there were errors when submitting the form
            parent::view('addStudent', $this->data);
        }
        else
        {
            // No POST data - no form submission, load the form 
            parent::view('addStudent', $this->data);
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
    public function findStudent()
    {
        
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
    // Function to display student details page
    public function viewStudent($userId)
    {
        $studObj = parent::model('user');
        $studObj = parent::model('student');
        $addrObj = parent::model('address');
        $userContObj = parent::model('userContact');

        $studObj->setId($userId);
        $studObj->populateFromDb();
        $studObj->popStudFromDb();
        $addrObj->getuserAddressFromDb($studObj->getId());
        $userContObj->getuserContFromDb($studObj->getId());

        $studentData['student'] = $studObj;
        $studentData['address'] = $addrObj;
        $studentData['contact'] = $userContObj;

        parent::view('viewStudent', $studentData);
    }
}