<?php
function dbConnection(){
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'oli@MEN2018';
  $db_db = 'csms';
  try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_db", $db_user, $db_password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  return $conn;
}
?>
