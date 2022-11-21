<?php 

include("Libraries/Database.php");
$db = new Database();
$sql = "INSERT INTO Users(name, email, password) VALUES(:name, :email, :password);";
$db->query($sql);
$db->bind(":name", "Oliver Mensah");
$db->bind(":email", "olivermensah96@gmail.com");
$password = password_hash("om@gmail.com", PASSWORD_DEFAULT);
$db->bind(":password", $password);
try {
    $db->execute();
} catch (\Throwable $th) {
    echo $th->getMessage();
}



