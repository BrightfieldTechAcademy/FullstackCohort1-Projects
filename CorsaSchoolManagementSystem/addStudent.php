<?php 

require('Core/init.php');

if($_SESSION['loggedIn'] && $_SESSION['userType'] === UserType::ADMIN){
    if($_POST['addStudent']){
        //student data
        $student = new StudentData();
        $admin = new Admin(new Database());
        $student->firstName = htmlspecialchars($_POST['firstName']);
        $student->lastName = htmlspecialchars($_POST['lastName']);
        $student->middleName = htmlspecialchars($_POST['middleName']);
        $student->dateOfBirth = htmlspecialchars($_POST['dateOfBirth']);
        $student->placeOfBirth = htmlspecialchars($_POST['placeOfBirth']);
        $student->hometown = htmlspecialchars($_POST['hometown']);
        $student->residentialAddress = htmlspecialchars($_POST['residentialAddress']);
        $student->gpsAddress = htmlspecialchars($_POST['GPSAddress']);
        $student->gender = htmlspecialchars($_POST['gender']);
        $student->religion = htmlspecialchars($_POST['religion']);
        $student->formerSchool = htmlspecialchars($_POST['formerSchool']);
        $student->previousClass = htmlspecialchars($_POST['previousClass']);
        $student->classAdmitted = htmlspecialchars($_POST['classAdmitted']);
        $student->yearOfAdmission = htmlspecialchars($_POST['yearOfAdmission']);
        //handle picture upload of student
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            if (!file_exists($target_file)){
                if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $student->picture = $target_file;
                }
            }else{
                echo "File already exist, check the file name properly";
            }
        } else {
            echo "File is not an image.";
        }
        $studentId = $admin->addStudent($student);

        $studentHealthData = new StudentHealthData();
        $studentHealthData->emergencyContactNumber = htmlspecialchars($_POST['emergencyContact']);
        $studentHealthData->personalDoctorNumber = htmlspecialchars($_POST['doctorsContact']);
        $studentHealthData->medicalFitnessNote = htmlspecialchars($_POST['fitnessNote']);
        $studentHealthData->bloodGroup = htmlspecialchars($_POST['bloodGroup']);
        $studentHealthData->preferedDiet = htmlspecialchars($_POST['preferedDiet']);
        $studentHealthData->unpreferedDiet = htmlspecialchars($_POST['unpreferedDiet']);
        $studentHealthData->studentId = $studentId;

        $admin->addStudentHealthData($studentHealthData);

        $studentParentData = new StudentParentData();
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
        $studentParentData->studentId = $studentId;

        $admin->addStudentParentData($studentParentData);
    }
    $template = new Template("Views/addStudent.php");
    echo $template;

}else{
    header("Location: ". BASE_URL . "/index.php");

}
