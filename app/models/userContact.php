<?php

class UserContact
{
    protected $mailId, $address, $homePhoneId, $homePhone, $mobPhoneId, $mobPhone;

    function getMailId()
    {
        return $this->mailId;
    }
    function getEmailAddress()
    {
        return $this->address;
    }
    function getHomePhoneId()
    {
        return $this->homePhoneId;
    }
    function getHomePhone()
    {
        return $this->homePhone;
    }
    function getMobPhoneId()
    {
        return $this->mobPhoneId;
    }
    function getMobPhone()
    {
        return $this->mobPhone;
    }

    function setMailId($mailId)
    {
        $this->mailId = $mailId;
    }
    function setEmailAddress($address)
    {
        $this->address = $address;
    }
    function setHomePhoneId($homePhoneId)
    {
        $this->homePhoneId = $homePhoneId;
    }
    function setHomePhone($homePhone)
    {
        $this->homePhone = $homePhone;
    }
    function setMobPhoneId($mobPhoneId)
    {
        $this->mobPhoneId = $mobPhoneId;
    }
    function setMobPhone($mobPhone)
    {
        $this->mobPhone = $mobPhone;
    }

    function __construct() {}

    function addContToDB()
    {
        require '../app/config.php';
        // Add email, home tel and mobile tel numbers to DB
        
        // Check to see if address already exists
        $emailDuplQuery = $conn->prepare("SELECT * from Emails WHERE Address = ? AND Type = ?");
        $hPhoneDuplQuery = $conn->prepare("SELECT * from Phones WHERE PhoneType = ? AND PhoneNo = ?");
        $mPhoneDuplQuery = $conn->prepare("SELECT * from Phones WHERE PhoneType = ? AND PhoneNo = ?");

        $tAddress = $this->getEmailAddress();
        $tAddrType = 'personal';
        $emailDuplQuery->bind_param("ss", $tAddress, $tAddrType);

        $tHomePhone = $this->getHomePhone();
        $tHPhoneType = 'Home';
        $hPhoneDuplQuery->bind_param("si", $tHPhoneType, $tHomePhone);

        $tMobPhone = $this->getMobPhone();
        $tMPhoneType = 'Mobile';
        $mPhoneDuplQuery->bind_param("si", $tMPhoneType, $tMobPhone);

        $emailDuplQuery->execute();
        $hPhoneDuplQuery->execute();
        $mPhoneDuplQuery->execute();

        $emailDuplQuery->store_result();
        $hPhoneDuplQuery->store_result();
        $mPhoneDuplQuery->store_result();

        if ($emailDuplQuery->num_rows === 0 && $hPhoneDuplQuery->num_rows === 0 && $mPhoneDuplQuery->num_rows === 0)
        {   
            // No duplicates found, so bind the properties to the query and fire away
            $emailQuery = $conn->prepare("INSERT INTO Emails (Address, Type) VALUES (?, ?)");
            $emailQuery->bind_param("ss", $tAddress, $tAddrType);
            $emailQuery->execute();
            // Store the Address Id from the record that has just been inserted into the address object
            $result = mysqli_query($conn, "SELECT LAST_INSERT_ID()");
            while ($myrow = $result->fetch_array(MYSQLI_ASSOC))
            {
                $this->setMailId(intval($myrow["LAST_INSERT_ID()"]));
            }

            $hPhoneQuery = $conn->prepare("INSERT INTO Phones (PhoneType, PhoneNo) VALUES (?, ?)");
            $hPhoneQuery->bind_param("si", $tHPhoneType, $tHomePhone);
            $hPhoneQuery->execute();
            // Store the Home Phone Id from the record that has just been inserted into the UserContact object
            $result = mysqli_query($conn, "SELECT LAST_INSERT_ID()");
            while ($myrow = $result->fetch_array(MYSQLI_ASSOC))
            {
                $this->setHomePhoneId(intval($myrow["LAST_INSERT_ID()"]));
            }

            $mPhoneQuery = $conn->prepare("INSERT INTO Phones (PhoneType, PhoneNo) VALUES (?, ?)");
            $mPhoneQuery->bind_param("si", $tMPhoneType, $tMobPhone);
            $mPhoneQuery->execute();
            // Store the Mobile Phone ID from the record that has just been inserted into the UserContact object
            $result = mysqli_query($conn, "SELECT LAST_INSERT_ID()");
            while ($myrow = $result->fetch_array(MYSQLI_ASSOC))
            {
                $this->setMobPhoneId(intval($myrow["LAST_INSERT_ID()"]));
            }
        }
        else
        {   
            die('Error: addContToDB : Address already exists.');
        }
    }
}