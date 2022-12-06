<?php 

require('Core/init.php');

if($_SESSION['loggedIn']){
    $users = new User(new Database());
    $template = new Template("Views/dashboard.php");
    $template->studentDetails = $users->getStudentsDetails();
    echo $template;
}else{
    header("Location: ". BASE_URL . "/index.php");

}

