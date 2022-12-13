<?php 

require('Core/init.php');

if($_SESSION['loggedIn']){
    $users = new User(new Database());
    $template = new Template("Views/studentDetails.php");
    $template->studentDetails = $users->getStudentDetails(htmlspecialchars($_GET['studentId']));
    $template->studentFees = $users->getStudentFees(htmlspecialchars($_GET['studentId']));

    echo $template;
}else{
    header("Location: ". BASE_URL . "/index.php");

}



