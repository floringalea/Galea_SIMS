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
    function popStudFromDb()
    {
        if (isset($this->userId))
        {
            // Connect to db and populate fields
            require '../app/config.php';

            if ($query = $conn->prepare("SELECT UserId, UPN, UCI, FormerUPN, FormerSN, PrefSN, PrefFN, NCyearActual, Ethnicity, EthnicitySource, MedicalFLag, DisabFlag, EnrolStat, InCare FROM Student WHERE UserId = ?"))
            {
                $query->bind_param("s", $this->userId);
                $query->execute();
                $result = $query->get_result();
                
                while ($row = $result->fetch_row())
                {
                    $this->userId = $row['0'];
                    $this->upn = $row['1'];
                    $this->uci = $row['2'];
                    $this->formerUpn = $row['3'];
                    $this->formerSn = $row['4'];
                    $this->prefSn = $row['5'];
                    $this->prefFn = $row['6'];
                    $this->nCYearActual = $row['7'];
                    $this->ethnicity = $row['8'];
                    $this->ehtnicitySource = $row['9'];
                    $this->medicalFlag = $row['10'];
                    $this->disabFlag = $row['11'];
                    $this->enrolStatus = $row['12'];
                    $this->inCare = $row['13'];
                }

            } else
            {
                die('Error: populateFromDb : Could not prepare MySQLi statement');
            }

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
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
    }
}