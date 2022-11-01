<?php 
include("Libraries/Database.php");

$stmt = $conn->prepare("SELECT * FROM students_info ;");
$stmt->execute();