<?php 

include("Libraries/Database.php");
include('Helpers/Roles.php');
$db = new Database();
$sql = "INSERT INTO Users(name, email, password, role) VALUES(:name, :email, :password, :role);";
$db->query($sql);
$db->bind(":name", "Adminstrator");
$db->bind(":email", "admin@gmail.com");
$db->bind(":role", Roles::ADMIN);
$password = password_hash("iamadmin", PASSWORD_DEFAULT);
$db->bind(":password", $password);
try {
    $db->execute();
} catch (\Throwable $th) {
    echo $th->getMessage();
}



