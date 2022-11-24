<?php 

require_once("Core/init.php");

class Student
{
    //StudentInfo
    public string $firstName;
    public string $middleName;
    public string $lastName;
    public string $dateOfBirth;
    public string $placeOfBirth;
    public string $hometown;
    public string $residentialAddress;
    public string $gpsAddress;
    public string $gender;
    public string $religion;
    public string $formalSchool;
    public string $previousSchool;
    public string $classAdmitted;
    public string $yearOfAdmission;
    //Parents info
    public string $fathersName;
    public string $fathersOccupation;
    public string $fathersTelephone;
    public string $fathersHometown ;
    public string $mothersName ;
    public string $mothersOccupation;
    public string $mothersHometown ;
    public string $house;
    public string $yearOfAdmission;
    public string $guardiansName ;
    public string $residence;
    public string $contact;
    //StudentHealthInfo
    public string $emergencyContactNumber;
    public string $personalDoctorNumber;
    public string $medicalFitnessNote;
    public string $preferedDiet;
    public string $unpreferedDiet;




    public function __construct($firstName, $middleName,$lastName, $dateOfBirth, 
    $placeOfBirth, $hometown, $residentialAddress, $gpsAddress,
    $gender, $religion, $formalSchool,$previousSchool,$classAdmitted, $yearOfAdmission, $fathersName,$fathersOccupation,$fathersTelephone,$fathersHometown,$mothersName,$mothersOccupation,$mothersHometown,$house,$mothersTelephone ,$guardiansName,$residence,$contact,$emergencyContactNumber,$personalDoctorNumber,$medicalFitnessNote,$bloodGroup,$preferedDiet,$unpreferedDiet )
    {
        //StudentInfo
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->placeOfBirth = $placeOfBirth;
        $this->hometown = $hometown;
        $this->residentialAddress = $residentialAddress;
        $this->gpsAddress = $gpsAddress;
        $this->gender = $gender;
        $this->religion = $religion;
        $this->formalSchool = $formalSchool;
        $this->previousSchool = $previousSchool;
        $this->classAdmitted = $classAdmitted;
        $this->yearOfAdmission = $yearOfAdmission;
        //ParentsInfo
        $this->fathersName = $fathersName;
        $this->fathersOccupation = $fathersOccupation;
        $this->fathersTelephone = $fathersTelephone;
        $this->fathersHometown = $fathersHometown;
        $this->mothersName = $mothersName;
        $this->mothersOccupation = $mothersOccupation;
        $this->mothersHometown = $mothersHometown;
        $this->house = $house;
        $this->mothersTelephone = $mothersTelephone;
        $this->guardiansName = $guardiansName;
        $this->residence = $residence;
        $this->contact = $contact;
        //StudentHealthInfo
        $this->ergencyContactNumber = $ergencyContactNumber;
        $this->personalDoctorNumber = $personalDoctorNumber;
        $this->medicalFitnessNote = $medicalFitnessNote;
        $this->bloodGroup = $bloodGroup;
        $this-> preferedDiet  = $preferedDiet ;
        $this-> unpreferedDiet  = $unpreferedDiet ;







    }
}