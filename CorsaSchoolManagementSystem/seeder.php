<?php 

include("Libraries/Database.php");
$db = new Database();
$sql = "INSERT INTO Users(name, email, password) VALUES(:name, :email, :password);";
$db->query($sql);
$db->bind(":name", "Abu Samuel");
$db->bind(":email", "abusamuel2003@gmail.com");
$password = password_hash("Baakokrom@1", PASSWORD_DEFAULT);
$db->bind(":password", $password);
try {
    $db->execute();
} catch (\Throwable $th) {
    echo $th->getMessage();
}



