<?php

class Course
{
    protected $courseId, $name, $teacherId, $subjectId, $year, $startDate, $room, $sessionsTotal;

    function getCourseId()
    {
        return $this->courseId;
    }
    function getCourseName()
    {
        return $this->name;
    }
    function getCourseTeacherId()
    {
        return $this->teacherId;
    }
    function getCourseSubjectId()
    {
        return $this->subjectId;
    }
    function getCourseYear()
    {
        return $this->year;
    }
    function getCourseStartDate()
    {
        return $this->startDate;
    }
    function getCourseRoom()
    {
        return $this->room;
    }
    function getCourseSessionsTotal()
    {
        return $this->sessionsTotal;
    }

    function setCourseId($courseId)
    {
        $this->courseId = $courseId;
    }
    function setCourseName($courseName)
    {
        $this->name = $courseName;
    }
    function setCourseTeacherId($teacherId)
    {
        $this->teacherId = $teacherId;
    }
    function setCourseSubjectId($subjectId)
    {
        $this->subjectId = $subjectId;
    }
    function setCourseYear($year)
    {
        $this->year = $year;
    }
    function setCourseStartDate($startDate)
    {
        $this->startDate = $startDate;
    }
    function setCourseRoom($room)
    {
        $this->room = $room;
    }
    function setCourseSessionsTotal($sessionsTotal)
    {
        $this->sessionsTotal = $sessionsTotal;
    }

    function __construct() {}
    
    function addCourseToDB()
    {
        // Adds record to 'Course' table in db
        require '../app/config.php';

            if ($query = $conn->prepare("INSERT INTO Course (Name, TeacherId, SubjectID, Year, StartDate, Room, SessionsTotal) 
                                            VALUES (?, ?, ?, ?, ?, ?, ?)"))
            {
                $query->bind_param("siisssi", $this->name, $this->teacherId, $this->subjectId, $this->year, $this->startDate, $this->room, $this->sessionsTotal);
                $query->execute();
            }
            else
            {
                die('Error: addToDB : Could not add new Teacher record to database.');
            }
    }
}