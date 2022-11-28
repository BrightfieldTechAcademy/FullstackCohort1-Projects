<?php 

require("Core/init.php");

class Admin extends User
{
    public function addStudent(StudentData $student)
    {
        //Student
        $sql = "INSERT INTO StudentsInfo(
            firstname, 
            middlename,
            lastname,
            dateOfBirth,
            placeOfBirth,
            hometown,
            residentialAddress,
            gpsAddress,
            gender,
            religion,
            formerSchool,
            previousClass,
            classAdmitted,
            yearOfAdmission, 
            picture
        ) VALUES(
            :firstname, 
            :middlename, 
            :lastname,
            :dateOfBirth,
            :placeOfBirth,
            :hometown,
            :residentialAddress,
            :gpsAddress,
            :gender,
            :religion,
            :formerSchool,
            :previousClass,
            :classAdmitted,
            :yearOfAdmission, 
            :picture
        );";
        $this->db->query($sql);
        $this->db->bind(":firstname", $student->firstName);
        $this->db->bind(":middlename",$student->middleName);
        $this->db->bind(":lastname",$student->lastName);
        $this->db->bind(":dateOfBirth", $student->dateOfBirth);
        $this->db->bind(":placeOfBirth",$student->placeOfBirth);
        $this->db->bind(":hometown",$student->hometown);
        $this->db->bind(":residentialAddress",$student->residentialAddress);
        $this->db->bind(":gpsAddress", $student->gpsAddress);
        $this->db->bind(":gender",$student->gender);
        $this->db->bind(":religion",$student->religion);
        $this->db->bind(":formerSchool", $student->formerSchool);
        $this->db->bind(":previousClass",$student->previousClass);
        $this->db->bind(":classAdmitted",$student->classAdmitted);
        $this->db->bind(":yearOfAdmission",$student->yearOfAdmission);
        $this->db->bind(":picture",$student->picture);
        $this->db->execute(); 

        return $this->db->lastInsertId();
        
    
    }

}