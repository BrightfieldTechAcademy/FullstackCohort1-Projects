<?php 

include("Models/User.php");
include("Libraries/Template.php");

$user = new User(new Database());
$template = new Template("Views/login.php");

echo $template;
