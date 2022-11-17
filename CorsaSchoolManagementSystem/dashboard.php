<?php 

require('Core/init.php');

if($_SESSION['loggedIn']){
    $template = new Template("Views/dashboard.php");
    echo $template;
}else{
    header('Location: /index.php');
}

