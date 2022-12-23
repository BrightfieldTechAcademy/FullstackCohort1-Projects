<?php 

require('Core/init.php');

if($_SESSION['loggedIn']){
    $users = new User(new Database());
    $template = new Template("Views/studentDetails.php");
    $studentDetails = $users->getStudentDetails(htmlspecialchars($_GET['studentId']));
    $template->classes = $users->getClasses();

    $template->studentDetails = $studentDetails;
    $studentFees = $users->getStudentFees($studentDetails->studentId);
    for($index = 0; $index < count($studentFees); $index++){
        $fee = $studentFees[$index];
        $fee->isStudentOwing = false;
        if($fee->termFees  - $fee->amountPaid > 0 ){
            $fee->isStudentOwing = true;
            $studentFees[$index] = $fee;
        }
    }
    foreach($studentFees as $fee){
        
    
    }
    $template->studentFees = $studentFees;
    
    

    echo $template;
}else{
    header("Location: ". BASE_URL . "/index.php");

}



