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

    public function addStudentHealthData(StudentHealthData, $studentHealthData) {

        //Health Info
        $sql = "INSERT INTO StudentHealthsInfo (
            emergencyContactNumber,
            personalDoctorNumber,
            medicalFitnessNote,
            bloodGroup,
            preferedDiet,
            unpreferedDiet
        ) VALUES(
            :emergencyContactNumber,
            :personalDoctorNumber,
            :medicalFitnessNote,
            :bloodGroup,
            :preferedDiet,
            :unpreferedDiet
        );";

        $this->db->query($sql);
        $this->db->bind(":emergencyContactNumber", $studentHealthData->emergencyContactNumber);
        $this->db->bind(":personalDoctorNumber", $studentHealthData->personalDoctorNumber);
        $this->db->bind(":medicalFitnessNote", $studentHealthData->medicalFitnessNote);
        $this->db->bind(":bloodGroup", $studentHealthData->bloodGroup);
        $this->db->bind(":preferedDiet", $studentHealthData->preferedDiet);
        $this->db->bind(":unpreferedDiet", $studentHealthData->unpreferedDiet);
        $this->db->execute();
    }


    public function addStudentParentData(StudentParentData $studentParentData) {

        //Parents Info
       $sql = "INSERT INTO ParentsInfo(
        fathersName,
        fathersOccupation,
        fathersTelephone,
        fathersHometown,
        mothersName,
        mothersOccupation,
        mothersHometown,
        houseNumber,
        guardiansName,
        residence,
        contact
       ) VALUES(
        :fathersName,
        :fathersOccupation,
        :fathersTelephone,
        :fathersHometown,
        :mothersName,
        :mothersOccupation,
        :mothersHometown,
        :houseNumber,
        :guardiansName,
        :residence,
        :contact
       );";
        
        $this->db->query($sql);
        $this->db->bind(":fathersName", $this->studentParentData->fathersName);
        $this->db->bind(":fathersOccupation", $this->studentParentData->fathersOccupation);
        $this->db->bind(":fathersTelephone", $this->studentParentData->fathersTelephone);
        $this->db->bind(":fathersHometown", $this->studentParentData->fathersHometown);
        $this->db->bind(":mothersName", $this->studentParentData->mothersName);
        $this->db->bind(":mothersOccupation", $this->studentParentData->mothersOccupation);
        $this->db->bind(":mothersHometown", $this->studentParentData->mothersHometown);
        $this->db->bind(":houseNumber", $this->studentParentData->houseNumber);
        $this->db->bind(":guardiansName", $this->studentParentData->guardiansName);
        $this->db->bind(":residence", $this->studentParentData->residence);
        $this->db->bind(":contact", $this->studentParentData->contact);
        $this->db->execute();
    }
}