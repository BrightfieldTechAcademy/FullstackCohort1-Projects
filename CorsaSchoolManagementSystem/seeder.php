<?php 

include("Libraries/Database.php");
$db = new Database();
$sql = "INSERT INTO Users(name, email, password) VALUES(:name, :email, :password);";
$db->query($sql);
$db->bind(":name", "Richmond Andoh");
$db->bind(":email", "richmondandoh00@gmail.com");
$password = password_hash("ra@gmail.com", PASSWORD_DEFAULT);
$db->bind(":password", $password);
try {
    $db->execute();
} catch (\Throwable $th) {
    echo $th->getMessage();
}



