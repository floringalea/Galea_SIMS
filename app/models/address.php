<?php

class Address
{
    protected $addressId, $houseName, $streetNo, $flatNo, $street, $postCode, $county, $town, $city, $country;

    function __construct() {}

    // ------ THE GETTERS ------
    function getAddressId()
    {
        return $this->addressId;
    }
    function getHouseName()
    {
        return $this->houseName;
    }
    function getSteetNo()
    {
        return $this->streetNo;
    }
    function getFlatNo()
    {
        return $this->flatNo;
    }
    function getStreet()
    {
        return $this->street;
    }
    function getPostCode()
    {
        return $this->postCode;
    }
    function getCounty()
    {
        return $this->county;
    }
    function getTown()
    {
        return $this->town;
    }
    function getCity()
    {
        return $this->city;
    }
    function getCountry()
    {
        return $this->country;
    }

    // ------ THE SETTERS ------
    function setAddressId($addressId)
    {
        $this->addressId = $addressId;
    }
     function setHouseName($houseName)
    {
        $this->houseName = $houseName;
    }
    function setStreetNo($streetNo)
    {
        $this->streetNo = $streetNo;
    }
     function setFlatNo($flatNo)
    {
        $this->flatNo = $flatNo;
    }
    function setStreet($street)
    {
        $this->street = $street;
    }
    function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    }
     function setCounty($county)
    {
        $this->county = $county;
    }
    function setTown($town)
    {
        $this->town = $town;
    }
    function setCity($city)
    {
        $this->city = $city;
    }
    function setCountry($country)
    {
        $this->country = $country;
    }
    
    // Add address to DB
    function addAddrToDB()
    {
        require '../app/config.php';

        if($addrQuery = $conn->prepare("INSERT INTO Address (HouseName, StreetNo, FlatNo, Street, PostCode, County, Town, City, Country)
                                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"))
        {
            // Check to see if address already exists
            $addrDuplQuery = $conn->prepare("SELECT * from Address WHERE FlatNo = ? AND StreetNo = ? AND Street = ? AND PostCode = ? AND Town = ? AND City = ?");
            $addrDuplQuery->bind_param("iissss", $this->flatNo, $this->streetNo, $this->street, $this->postCode, $this->town, $this->city);
            $addrDuplQuery->execute();
            $addrDuplQuery->store_result();
            if ($addrDuplQuery->num_rows === 0)
            {   
                // No duplicate found, so bind the properties to the query and fire away
                $addrQuery->bind_param("siississs", $this->houseName, $this->streetNo, $this->flatNo, $this->street, $this->postCode, $this->county, $this->town, $this->city, $this->country);
                $addrQuery->execute();
                // Store the AddressId from the record that has just been inserted into the address object
                $result = mysqli_query($conn, "SELECT LAST_INSERT_ID()");
                while ($myrow = $result->fetch_array(MYSQLI_ASSOC))
                {
                    $this->setAddressId(intval($myrow["LAST_INSERT_ID()"]));
                }
            }
            else
            {   
                die('Error: addAddrToDB : Address already exists.');
            }
        }
        else
        {
            die('Error: addAddrToDB : Could not prepare MySQLi statement');
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class

    function getuserAddressFromDb($userId)
    {
        // Connect to db and populate fields
        require '../app/config.php';

        // Find User's address in DB
        $query = mysqli_query($conn, 'SELECT AddressId from User WHERE UserId = '.$userId);
        $qResult = mysqli_fetch_row($query);
        // AddressId now known, get address contents from DB 
        if ($query = $conn->prepare("SELECT HouseName, StreetNo, FlatNo, Street, PostCode, County, Town, City, Country from Address WHERE AddressId = ?"))
        {
            $query->bind_param("s", $qResult['0']);
            $query->execute();
            $result = $query->get_result();
            
            while ($row = $result->fetch_row())
            {
                $this->houseName = $row['0'];
                $this->streetNo = $row['1'];
                $this->flatNo = $row['2'];
                $this->street = $row['3'];
                $this->postCode = $row['4'];
                $this->county = $row['5'];
                $this->town = $row['6'];
                $this->city = $row['7'];
                $this->country = $row['8'];
            }

        } else
        {
            die('Error: populateFromDb : Could not prepare MySQLi statement');
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
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
=======
>>>>>>> parent of d0c237b... Created 'FormGroup' class
}