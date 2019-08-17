<?php

class Subject
{
    protected $subjectId, $subjectName, $subjectYear;

    function getSubjectId()
    {
        return $this->subjectId;
    }
    function getSubjectName()
    {
        return $this->subjectName;
    }
    function getSubjectYear()
    {
        return $this->subjectYear;
    }

    function setSubjectId($subjectId)
    {
        $this->subjectId = $subjectId;
    }
    function setSubjectName($subjectName)
    {
        $this->subjectName = $subjectName;
    }
    function setSubjectYear($subjectYear)
    {
        $this->subjectYear = $subjectYear;
    }

    function __construct()
    {

    }

    function addSubjectToDB()
    {
        // Adds record to 'Subject' table in db
        require '../app/config.php';

            if ($query = $conn->prepare("INSERT INTO Subject (SubjectName, Year) 
                                            VALUES (?, ?)"))
            {
                $query->bind_param("si", $this->subjectName, $this->subjectYear);
                $query->execute();
            }
            else
            {
                die('Error: addToDB : Could not add new Subject record to database.');
            }
    }
}