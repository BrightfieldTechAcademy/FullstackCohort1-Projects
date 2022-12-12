<?php 

require('Core/init.php');

if($_SESSION['loggedIn'] && $_SESSION['userType'] === UserType::ADMIN){
    if($_POST['payFee']){
        //student fees
        $admin = new Admin(new Database());
        $studentFees = new StudentFees();

        $studentFees->studentId = $studentId;
        $studentFees->feeToPay = htmlspecialchars($_POST['feeToPay']);
        $studentFees->amountPaid = htmlspecialchars($_POST['amountPaid']);
        $studentFees->amountLeftToPaid = htmlspecialchars($_POST['amountLeftToPaid']);
        $studentFees->term = htmlspecialchars($_POST['term']);
        $studentFees->dateOfPayment = htmlspecialchars($_POST['dateOfPayment']);
        
        $admin->addStudentFees($studentFees);
    }
    $template = new Template("Views/studentDetails.php");
    echo $template;

}else{
    header("Location: ". BASE_URL . "/index.php");

}
