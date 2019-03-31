<?php

class Teacher extends User
{
    protected $teacherId, $userId, $subjectId, $startDate;

    function __construct() {}

    // The getters
    function getTeacherId()
    {
        return $this->teacherId;
    }
    function getUserId()
    {
        return $this->userId;
    }
    function getSubjectId()
    {
        return $this->subjectId;
    }
    function getStartDate()
    {
        return $this->startDate;
    }

    // The setters
    function setTeacherId($teacherId)
    {
        $this->teacherId = $teacherId;
    }
    function setUserId($userId)
    {
        $this->userId = $userId;
    }
    function setSubjectId($subjectId)
    {
        $this->subjectId = $subjectId;
    }
    function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    function addTeacherToDB()
    {
        // Adds record to 'User' table in db
        require '../app/config.php';

            if ($query = $conn->prepare("INSERT INTO Teacher (UserId, SubjectId, StartDate) 
                                         VALUES (?, ?, ?)"))
            {
                $query->bind_param("iis", $this->userId, $this->subjectId, $this->startDate);
                $query->execute();
            }
            else
            {
                die('Error: addToDB : Could not add new Teacher record to database.');
            }
    }
}