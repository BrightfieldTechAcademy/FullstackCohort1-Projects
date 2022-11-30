<?php 
include("Models/User.php");
?>
<!Doctype html>
<html>
    <head>
        <title>School Management System</title>
    </head>
    <body>
       <?php 
       $user = new User(new Database());
        foreach($user->getUsers() as $data) {
            echo $data['id']. " ". $data['name']. "<br/>";
            $counter++;
        }
       ?>
    </body>
<html>