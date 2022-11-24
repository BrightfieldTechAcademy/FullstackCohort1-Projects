<?php 

require("Core/init.php");

class Admin extends User
{
    public function addStudent(Student $student)
    {
        //Student
        $sql = "INSERT INTO StudentsInfo(firstname, middlename,lastname,dateOfBirth,placeOfBirth,hometown,residentialAddress,gpsAddress,gender,religion,formalSchool,previousSchool,classAdmitted,yearOfAdmission) VALUES(:firstName, :middleName, : lastname,:dateOfBirth,:placeOfBirth,:hometown,:residentialAddress,:gpsAddress,:gender,:religion,:formalSchool,:previousSchool,:classAdmitted,:yearOfAdmission);";
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
        // Parents Info
        $sql = "INSERT INTO ParentsInfo(fathersName,fathersOccupation,fathersTelephone,fathersHometown,mothersName,mathersOccupation,mothersHometown,house,mothersTelephone ,guardiansName,residence,contact) VALUES (:fathersName,:fathersOccupation,:fathersTelephone,:fathersHometown,:mothersName,:mothersOccupation,:mothersHometown,:house,:mothersTelephone ,:guardiansName,:residence,:contact);";
        $this->db->query($sql);
        $this->db->bind(":fathersName", $student->fathersName);
        $this->db->bind(":fathersOccupation",$student->fathersOccupation);
        $this->db->bind(":fathersTelephone",$student->fathersTelephone);
        $this->db->bind(":fathersHometown", $student->fathersHometown);
        $this->db->bind(":mothersName",$student->mothersName);
        $this->db->bind(":mothersOccupation",$student->mothersOccupation);
        $this->db->bind(":mothersHometown",$student->mothersHometown);
        $this->db->bind(":house", $student->house);
        $this->db->bind(":mothersTelephone",$student->mothersTelephone);
        $this->db->bind(":guardiansName", $student->guardiansName);
        $this->db->bind(":residence", $student->residence);
        $this->db->bind(":contact", $student->contact);
        //Student Helath Info
        $sql = "INSERT INTO StudentHealthInfo(emergencyContactNumber,personalDoctorNumber,medicalFitnessNote,bloodGroup,preferedDiet,unpreferedDiet) VALUES(:emergencyContactNumber,:personalDoctorNumber,:medicalFitnessNote,:bloodGroup,:preferedDiet,:unpreferedDiet);";
        $this->db->query($sql);
        $this->db->bind(":emergencyContactNumber", $student->emergencyContactNumber);
        $this->db->bind(":personalDoctorNumber",$student->personalDoctorNumber);
        $this->db->bind(":bloodGroup",$student->bloodGroup);
        $this->db->bind(":preferedDiet", $student->preferedDiet);
        $this->db->bind(":unpreferedDiet",$student->unpreferedDiet);


        try {
            $this->db->execute();
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        
        
    }

}