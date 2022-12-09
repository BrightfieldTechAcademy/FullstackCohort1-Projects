<?php 

require('Core/init.php');

if($_SESSION['loggedIn'] && $_SESSION['userType'] === UserType::ADMIN){
    if($_POST['addfees']){
        //student fees
        $admin = new Admin(new Database());
        $studentFees = new studentFees();

        $studentFees->studentId = $studentId;
        $studentFees->fullName = htmlspecialchars($_POST['fullName']);
        $studentFees->gender = htmlspecialchars($_POST['gender']);
        $studentFees->class = htmlspecialchars($_POST['class']);
        $studentFees->feeToPay = htmlspecialchars($_POST['feeToPay']);
        $studentFees->amountPaid = htmlspecialchars($_POST['amountPaid']);
        $studentFees->amountLeftToPaid = htmlspecialchars($_POST['amountLeftToPaid']);
        $studentFees->term = htmlspecialchars($_POST['term']);
        $studentFees->dateOfPayment = htmlspecialchars($_POST['dateOfPayment']);
        
        $admin->addstudentFees($studentFees);
    }
    $template = new Template("Views/studentFees.php");
    echo $template;

}else{
    header("Location: ". BASE_URL . "/index.php");

}
