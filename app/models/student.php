<?php

class Student extends User
{
    // Declare all variables
    protected $userId, $upn, $uci, $formerUpn, $formerSn, $prefSn, $prefFn, $nCYearActual, $ethnicity, $ehtnicitySource, $medicalFlag = 0, $disabFlag = 0, $enrolStatus = 1, $inCare = 0;

    function __construct()
    {
        // Retrieve values from db?
    }

    // The GETTERS
    function getUserID()
    {
        return $this->userId;
    }
    function getUPN()
    {
        return $this->upn;
    }
    function getUCI()
    {
        return $this->uci;
    }
    function getFormerUPN()
    {
        return $this->formerUpn;
    }
    function getFormerSN()
    {
        return $this->formerSn;
    }
    function getPrefSN()
    {
        return $this->prefSn;
    } 
    function getPrefFN()
    {
        return $this->prefFn;
    }
    function getNCYearActual() 
    {
        return $this->nCYearActual;
    }
    function getEthnicity() 
    {
        return $this->ethnicity;
    }
    function getEthnicitySource() 
    {
        return $this->ehtnicitySource;
    }
    function getMedicalFlag() 
    {
        return $this->medicalFlag;
    }
    function getDisabFLag() 
    {
        return $this->disabFlag;
    } 
    function getEnrolStatus()
    {
        return $this->enrolStatus; 
    }
    function getInCare()
    {
        return $this->inCare;
    }

    // The SETTERS
    function setUserID($userId)
    {
        $this->userId = $userId;
    }
    function setUPN($upn)
    {
        $this->upn = $upn;
    }
    function setUCI($uci)
    {
        $this->uci = $uci;
    }
    function setFormerUPN($formerUPN)
    {
        $this->formerUpn = $formerUPN;
    }
    function setFormerSN($formerSn)
    {
        $this->formerSn = $formerSn;
    }
    function setPrefSN($prefSn)
    {
        $this->prefSn = $prefSn;
    } 
    function setPrefFN($prefFn)
    {
        $this->prefFn = $prefFn;
    }
    function setNCYearActual($nCYearActual) 
    {
        $this->nCYearActual = $nCYearActual;
    }
    function setEthnicity($ethnicity) 
    {
        $this->ethnicity = $ethnicity;
    }
    function setEthnicitySource($ethnicitySource) 
    {
        $this->ehtnicitySource = $ethnicitySource;
    }
    function setMedicalFlag($medicalFlag) 
    {
        $this->medicalFlag = $medicalFlag;
    }
    function setDisabFLag($disabFLag) 
    {
        $this->disabFlag = $disabFLag;
    } 
    function setEnrolStatus($enrolStatus)
    {
        $this->enrolStatus = $enrolStatus; 
    }
    function setInCare($inCare)
    {
        $this->inCare = $inCare;
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
    // Add Student record to DB - oinly works once all the [mandatory] properties have been populated
    function addStudentToDB()
    {
        // Adds record to 'User' table in db
        require '../app/config.php';

            if ($query = $conn->prepare("INSERT INTO Student (UserId, UPN, UCI, FormerUPN, FormerSN, PrefSN, PrefFN, NCyearActual, Ethnicity, EthnicitySource, MedicalFlag, DisabFlag, EnrolStat, InCare) 
                                         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"))
            {
                $query->bind_param("issssssissiiii", $this->userId, $this->upn, $this->uci, $this->formerUpn, $this->formerSn, $this->prefSn, $this->prefFn, $this->nCYearActual, $this->ethnicity, $this->ehtnicitySource, $this->medicalFlag, $this->disabFlag, $this->enrolStatus, $this->inCare);
                $query->execute();
            }
            else
            {
                die('Error: addToDB : Could not prepare MySQLi statement');
            }

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
    function popStudFromDb()
=======
    // Add Student record to DB - oinly works once all the [mandatory] properties have been populated
    function addStudentToDB()
>>>>>>> parent of 8caa1da... Added function to pull user's address details from DB based on user's ID
    {
        // Adds record to 'User' table in db
        require '../app/config.php';

            if ($query = $conn->prepare("INSERT INTO Student (UserId, UPN, UCI, FormerUPN, FormerSN, PrefSN, PrefFN, NCyearActual, Ethnicity, EthnicitySource, MedicalFlag, DisabFlag, EnrolStat, InCare) 
                                         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"))
            {
                $query->bind_param("issssssissiiii", $this->userId, $this->upn, $this->uci, $this->formerUpn, $this->formerSn, $this->prefSn, $this->prefFn, $this->nCYearActual, $this->ethnicity, $this->ehtnicitySource, $this->medicalFlag, $this->disabFlag, $this->enrolStatus, $this->inCare);
                $query->execute();
            }
            else
            {
                die('Error: addToDB : Could not prepare MySQLi statement');
            }

<<<<<<< HEAD
        }
    }

    // Add Student record to DB - oinly works once all the [mandatory] properties have been populated
    function addStudentToDB()
    {
        // Adds record to 'User' table in db
        require '../app/config.php';

        if ($query = $conn->prepare("INSERT INTO Student (UserId, UPN, UCI, FormerUPN, FormerSN, PrefSN, PrefFN, NCyearActual, Ethnicity, EthnicitySource, MedicalFlag, DisabFlag, EnrolStat, InCare) 
                                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"))
        {
            $query->bind_param("issssssissiiii", $this->userId, $this->upn, $this->uci, $this->formerUpn, $this->formerSn, $this->prefSn, $this->prefFn, $this->nCYearActual, $this->ethnicity, $this->ehtnicitySource, $this->medicalFlag, $this->disabFlag, $this->enrolStatus, $this->inCare);
            $query->execute();
        }
        else
        {
            die('Error: addToDB : Could not prepare MySQLi statement');
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
    }
}