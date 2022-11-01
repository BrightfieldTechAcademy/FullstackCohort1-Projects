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
       $counter = 1;
        foreach($stmt->fetchAll() as $data) {
            echo $counter. " ". $data['name']. "<br/>";
            $counter++;
        }
       ?>
    </body>
<html>