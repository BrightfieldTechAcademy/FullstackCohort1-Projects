<?php 

require('Core/init.php');

if($_SESSION['loggedIn'] && $_SESSION['userType'] === UserType::ADMIN){
    $template = new Template("Views/addStudent.php");
    echo $template;
}else{
    header('Location: /index.php');
}