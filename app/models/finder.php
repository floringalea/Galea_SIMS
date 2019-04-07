<?php

class Finder extends User
{
    function getStudentUsersFromDB()
    {
        require "../app/config.php";
        $result = mysqli_query($conn, "SELECT Title, Forename, LastName, Age, nCyearActual, UPN, UCI, Gender, Student.UserId FROM User, Student WHERE User.UserId = Student.UserId");
        $i = 0;
        $studData = [];
        while($r=mysqli_fetch_assoc($result))
        {
            $studData[$i] = $r;
            $i++;
        }
        return $studData;
    }
}