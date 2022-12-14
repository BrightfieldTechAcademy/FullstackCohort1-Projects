<?php 

require('Core/init.php');

if($_SESSION['loggedIn'] && $_SESSION['role'] === Roles::ADMIN){
    if(isset($_POST['payFees'])){
        $studentUuid = htmlspecialchars($_POST['studentUuid']);

        $admin = new Admin(new Database());
        $studentFees = new StudentFees();
        $studentFees->studentId = htmlspecialchars($_POST['studentId']);
        $studentFees->termFees = htmlspecialchars($_POST['termFees']);
        $studentFees->amountPaid = htmlspecialchars($_POST['amountPaid']);
        $studentFees->term = htmlspecialchars($_POST['term']);
        $studentFees->academicYear = htmlspecialchars($_POST['academicYear']);
        $studentFees->dateOfPayment = htmlspecialchars($_POST['dateOfPayment']);
        
        if($admin->addStudentFees($studentFees)){
            header("Location: ". BASE_URL . "/studentDetails.php?studentId=". $studentUuid);
        };
    }else{
        header("Location: ". BASE_URL . "/index.php");
    }

}else{
    header("Location: ". BASE_URL . "/index.php");

}
