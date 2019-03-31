<?php

class Admin extends User
{   
    protected $userId;

    function __construct() {}

    function setUSerId($userId)
    {
        $this->userId = $userId;
    }

    function addAdminToDB()
    {
    // Adds record to 'Admin' table in db
    require '../app/config.php';

        if ($query = $conn->prepare("INSERT INTO Admin (UserId) 
                                        VALUES (?)"))
        {   
            // Check to see if record already exists
            $queryId = $conn->prepare("SELECT * from Admin WHERE UserId = ?");
            $queryId->bind_param("i", $this->userId);
            $queryId->execute();
            $queryId->store_result();
            if ($queryId->num_rows === 0)
            {   
                // No duplicate found, so bind the properties to the query and fire away
                $query->bind_param("i", $this->userId);
                $query->execute();
            } 
            else
            {
                die('Error: addToDB : Duplicate entry. Record already exists.');
            }
        }
        else
        {
            die('Error: addToDB : Could not prepare MySQLi statement');
        }

    }
}