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
            $this->data['error'] = "You are not authorized to view this page.";
            parent::view('error', $this->data);// If not authorized - call error view and pass on error
            exit();// Stop running the Staff controller
        }

        // Prepare the Add Staff form for validation - mark the mandatory fields
        $this->data['error'] = [ 'forename' => '*',
                                 'lastName' => '*',
                                 'gender' => '*',
                                 'DOB' => '*',
                                 'role' => '*',
                                 'subject' => '*',
                                 'position' => '*',
                                 'startDate' => '*',
                                 'houseNo' => '*',
                                 'streetNo' => '*',
                                 'streetName' => '*',
                                 'postCode' => '*',
                                 'townName' => '*',
                                 'cityName' => '*',
                                 'countryName' => "*",
                                 'staffEmail' => "*",
                                 'homeTelNo' => '*',
                                 'mobTelNo' => '*' ];
    }
	
	// Main function of the Students Controller
    public function index()
    {
        $staff = parent::model('user');
        $finder = parent::model("finder");
		
		if(isset($_POST['staffSearch']))
		{
			$adminData = $finder->searchForAdmin($_POST['stafSearch']);
			parent::view('staffAdminDash', $adminData);
		}
		else
		{
			// Get all staff from DB - if no search has been performed
			$adminData = $finder->getAdminUsersFromDB();
			// Pass them on to the StudentAdminDash view
			parent::view('staffAdminDash', $adminData);
		}
		
        //parent::view('staffAdminDash', $this->data);
    }

    public function addStaff()
    {
        if (isset($_POST['addStaff']) && $_POST['addStaff'] === "Add Staff")
        {
            // Load and instantiate the user model
            $this->admin = parent::model('user');
            // Amin model - add user to Admin table
            $this->admin = parent::model('admin');
            // Address model - handle address input
            $this->address = parent::model('address');
            // UserContact model - handle email and phones
            $this->userContact = parent::model('userContact');

            /*   Beginning of input validation   */
            $inputValid = true;
            // Personal details
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
            // Address
            // Non Mandatory contact details fields
            if (!empty($_POST['houseName'])) { $this->address->setHouseName(parent::checkInput($_POST['houseName'])); }
            if (!empty($_POST['flatNo'])) { $this->address->setFlatNo(parent::checkInput($_POST['flatNo'])); }
            if (!empty($_POST['countyName'])) { $this->address->setCounty(parent::checkInput($_POST['countyName'])); }
            if (empty($_POST['streetNo']))
            {
                $inputValid = false;
                $this->data['error']['streetNo'] = "Street Number field cannot empty";
            }
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
            if (empty($_POST['cityName']))
            {
                $inputValid = false;
                $this->data['error']['cityName'] = "City field cannot empty";
            }
            if (empty($_POST['countryName']))
            {
                $inputValid = false;
                $this->data['error']['countryName'] = "Country field cannot empty";
            }
            // Email
            if (empty($_POST['staffEmail']))
            {
                $inputValid = false;
                $this->data['error']['staffEmail'] = "Email field cannot empty";
            }
            // Tel
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
                // 5. Build Address Object from POST data
                $this->address->setStreetNo(parent::checkInput($_POST['streetNo']));
                $this->address->setStreet(parent::checkInput($_POST['streetName']));
                $this->address->setPostCode(parent::checkInput($_POST['postCode']));
                $this->address->setTown(parent::checkInput($_POST['townName']));
                $this->address->setCity(parent::checkInput($_POST['cityName']));
                $this->address->setCountry(parent::checkInput($_POST['countryName']));
                // 6. Add Address to DB
                $this->address->addAddrToDB();
                // 7. Add UserId and AddressId to UserAddress bridge table
                $this->admin->addUserAddressToDB($this->address->getAddressId());
                // 8. Build UserContact Object from POST data
                $this->userContact->setEmailAddress(parent::checkInput($_POST['staffEmail']));
                $this->userContact->setHomePhone(parent::checkInput($_POST['homeTelNo']));
                $this->userContact->setMobPhone(parent::checkInput($_POST['mobTelNo']));
                // 9. Add Email & Phone Nos to DB
                $this->userContact->addContToDB();
                // 10. Add UserId and EmailId to UserEmails bridge table
                $this->admin->addUserContToDB($this->userContact->getMailId(), $this->userContact->getHomePhoneId(), $this->userContact->getMobPhoneId());
                // 11. Process complete. Show confirmation.
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