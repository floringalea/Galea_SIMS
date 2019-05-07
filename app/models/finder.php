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
	
	function searchForStudent($criteria)
	{
		require "../app/config.php";
		$result = mysqli_query($conn, "SELECT Title, Forename, LastName, Age, nCyearActual, UPN, UCI, Gender, Student.UserId FROM User, Student WHERE User.UserId = Student.UserId");
        $studData = [];
		
        while($r=mysqli_fetch_assoc($result))
        {
            if(strcasecmp($r['Forename'], $criteria) == 0 || $r['LastName'] == $criteria || $r['UPN'] == $criteria || $r['UCI'] == $criteria)
			{	
				$studData['0'] = $r;
				break;
			}
        }
        return $studData;
    }
    
    function searchForAdmin($criteria)
	{
		require "../app/config.php";
		$result = mysqli_query($conn, "SELECT Title, Forename, LastName, Position FROM User, Admin WHERE User.UserId = Admin.UserId");
        $data = [];
        while($r=mysqli_fetch_assoc($result))
        {
            if(strcasecmp($r['Forename'], $criteria) == 0 || strcasecmp($r['LastName'], $criteria) == 0 || strcasecmp($r['Position'], $criteria) == 0)
			{	
                $data['0'] = $r;
				break;
            }
        }
        return $data;
	}
	
	function getAdminUsersFromDB()
    {
        require "../app/config.php";
        $result = mysqli_query($conn, "SELECT UserId, Position FROM Admin");
        $i = 0;
        while($r=mysqli_fetch_assoc($result))
        {
            //$adminData[$i] = $r;
			$secResult = mysqli_query($conn, "SELECT Title, Forename, LastName, Gender FROM User WHERE UserId = ".$r['UserId']);
			while($z=mysqli_fetch_assoc($secResult))
			{
				$adminRecord[$i] = $z;
				$adminRecord[$i]['position'] = $r['Position'];
			}
            $i++;
        }
        return $adminRecord;
    }

    function getCoursesFromDB()
    {
        require "../app/config.php";
        $result = mysqli_query($conn, "SELECT CourseId, Name, TeacherId, SubjectId, Year, StartDate, Room, SessionsTotal FROM Course");
        $i = 0;
        $courseData = [];
        while($r=mysqli_fetch_assoc($result))
        {
            $courseData[$i] = $r;
            $i++;
        }
        return $courseData;
    }

    function getSubjectsFromDB()
    {
        require "../app/config.php";
        $result = mysqli_query($conn, "SELECT SubjectId, SubjectName, Year FROM Subject");
        $i = 0;
        $subjData = [];
        while($r=mysqli_fetch_assoc($result))
        {
            $subjData[$i] = $r;
            $i++;
        }
        return $subjData;
    }
}