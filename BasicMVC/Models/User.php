<?php 
include("Libraries/Database.php");

$stmt = $conn->prepare("SELECT * FROM users ;");
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
