<?php 

require('Core/init.php');

if($_SESSION['loggedIn']){
    $template = new Template("Views/studentDetails.php");
    echo $template;
}else{
    header("Location: ". BASE_URL . "/index.php");

}



