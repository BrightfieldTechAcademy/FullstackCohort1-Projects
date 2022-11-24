<?php 

require('Core/init.php');

if($_SESSION['loggedIn'] && $_SESSION['userType'] === UserType::ADMIN){
    if($_POST['addStudent']){
        //student data
        $firstName = htmlspecialchars($_POST['firstName']);
        $lastName = htmlspecialchars($_POST['lastName']);
        $middleName = htmlspecialchars($_POST['middleName']);
        $dateOfBirth = htmlspecialchars($_POST['dateOfBirth']);
        $placeOfBirth = htmlspecialchars($_POST['placeOfBirth']);
        $hometown = htmlspecialchars($_POST['hometown']);
        $residentialAddress = htmlspecialchars($_POST['residentialAddress']);
        $GPSAddress = htmlspecialchars($_POST['GPSAddress']);
        $gender = htmlspecialchars($_POST['gender']);
        $religion = htmlspecialchars($_POST['religion']);
        $formerSchool = htmlspecialchars($_POST['formerSchool']);
        $previousClass = htmlspecialchars($_POST['previousClass']);
        $classAdmitted = htmlspecialchars($_POST['classAdmitted']);
        $yearOfAdmission = htmlspecialchars($_POST['yearOfAdmission']);

        //parents data
        $fathersName = htmlspecialchars($_POST['fathersName']);
        $fathersOccupation = htmlspecialchars($_POST['fathersOccupation']);
        $fathersTelephone = htmlspecialchars($_POST['fathersTelephone']);
        $fathersHometown = htmlspecialchars($_POST['fathersHometown']);
        $mothersName = htmlspecialchars($_POST['mothersName']);
        $mothersOccupation = htmlspecialchars($_POST['mothersOccupation']);
        $mothersHometown = htmlspecialchars($_POST['mothersHometown']);
        $houseNumber = htmlspecialchars($_POST['houseNumber']);
        $mothersTelephone = htmlspecialchars($_POST['mothersTelephone']);
        $guardiansName = htmlspecialchars($_POST['guardiansName']);
        $guardiansResidence = htmlspecialchars($_POST['guardiansResidence']);
        $guardiansContact = htmlspecialchars($_POST['guardiansContact']);

        //health data
        $emergencyContact = htmlspecialchars($_POST['emergencyContact']);
        $doctorsContact = htmlspecialchars($_POST['doctorsContact']);
        $fitnessNote = htmlspecialchars($_POST['fitnessNote']);
        $bloodGroup = htmlspecialchars($_POST['bloodGroup']);
        $preferedDiet = htmlspecialchars($_POST['preferedDiet']);
        $unpreferedDiet = htmlspecialchars($_POST['unpreferedDiet']);





    }
    $template = new Template("Views/addStudent.php");
    echo $template;

}else{
    header('Location: /index.php');
}
