<?php 
include("Libraries/Template.php");
include_once('Config/Config.php');
session_start();
if($_SESSION['loggedIn']){
    $template = new Template("Views/dashboard.php");
    echo $template;
}else{
    header('Location: /index.php');
}

