<?php 

require_once("Core/init.php");

class Student
{
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


    public function __construct($firstName, $middleName,$lastName, $dateOfBirth, 
    $placeOfBirth, $hometown, $residentialAddress, $gpsAddress,
    $gender, $religion, $formalSchool,$previousSchool,$classAdmitted, $yearOfAdmission)
    {
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


    }
}