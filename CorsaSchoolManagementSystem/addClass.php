<?php 

require('Core/init.php');
if($_SESSION['loggedIn'] && $_SESSION['role'] === Roles::ADMIN){
    if(isset($_POST['addClass'])){
        
    }
    $template = new Template("Views/addClass.php");
    echo $template;

}else{
    header("Location: ". BASE_URL . "/index.php");

}
