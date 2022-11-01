<?php 
include("Libraries/Database.php");
function getUsers(){
    $conn = dbConnection();
    $stmt = $conn->prepare("SELECT * FROM students_info ;");
    $stmt->execute();
    
    return $stmt;
}