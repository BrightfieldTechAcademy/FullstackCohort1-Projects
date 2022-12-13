<?php 

include("Libraries/Database.php");
$db = new Database();
$sql = "INSERT INTO Users(name, email, password) VALUES(:name, :email, :password);";
$db->query($sql);
$db->bind(":name", "Adminstrator");
$db->bind(":email", "admin@gmail.com");
$password = password_hash("iamadmin", PASSWORD_DEFAULT);
$db->bind(":password", $password);
try {
    $db->execute();
} catch (\Throwable $th) {
    echo $th->getMessage();
}



