<?php 

require("Core/init.php");

class Admin extends User
{
    public function addStudent(Student $student)
    {
        $sql = "INSERT INTO StudentsInfo(firstname, middlename,lastname) VALUES(:firstName, :middleName, : lastname,:dateOfBirth,:placeOfBirth,:hometown,:residentialAddress,:gpsAddress,:gender,:religion,:formalSchool,:previousSchool,:classAdmitted,:yearOfAdmission);";
        $this->db->query($sql);
        $this->db->bind(":firstName", $student->firstName);
        $this->db->bind(":middleName",$student->middleName);
        $this->db->bind(":lastname",$student->lastname);
        $this->db->bind(":dateOfBirth", $student->dateOfBirth);
        $this->db->bind(":placeOfBirth",$student->placeOfBirth);
        $this->db->bind(":hometown",$student->hometown);
        $this->db->bind(":residentialAddress",$student->residentialAddress);
        $this->db->bind(":gpsAddress", $student->gpsAddress);
        $this->db->bind(":gender",$student->gender);
        $this->db->bind(":religion",$student->religion);
        $this->db->bind(":formalSchool", $student->formalSchool);
        $this->db->bind(":previousClass",$student->previousClass);
        $this->db->bind(":ClassAdmitted",$student->classAdmitted);
        $this->db->bind(":yearOfAmission",$student->residentialAddress);

        try {
            $this->db->execute();
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        
        
    }

}