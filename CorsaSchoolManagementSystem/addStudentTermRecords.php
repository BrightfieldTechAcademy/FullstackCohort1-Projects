<?php 

require("Core/init.php");

if($_SESSION['loggedIn'] && $_SESSION['role'] === Roles::ADMIN) {
    if(isset($_POST['addResults'])){
        $studentUuid = htmlspecialchars($_POST['studentUuid']);

        
        $admin = new Admin(new Database());
        $termRecords = new TermRecords();
        $termRecords->studentId = htmlspecialchars($_POST['studentId']);
        $termRecords->subjects = htmlspecialchars($_POST['subjects']);
        $termRecords->class = htmlspecialchars($_POST['class']);
        $termRecords->term = htmlspecialchars($_POST['term']);
        $termRecords->academicYear = htmlspecialchars($_POST['academicYear']);
        $termRecords->position = htmlspecialchars($_POST['position']);
        $termRecords->remarks = htmlspecialchars($_POST['remarks']);
        $termRecords->numberOfEnrollments = htmlspecialchars($_POST['numberOfEnrollments']);
        $termRecords->aggregate = htmlspecialchars($_POST['aggregate']);
        
        if($admin->addStudentRecords($termRecords)){
            header("Location: ". BASE_URL . "/studentDetails.php?studentId=". $studentUuid);
        };
        
    }  else{
        header("Location: ". BASE_URL . "/index.php");
    }  
        
} else{
    header("Location: ". BASE_URL . "/index.php");
}