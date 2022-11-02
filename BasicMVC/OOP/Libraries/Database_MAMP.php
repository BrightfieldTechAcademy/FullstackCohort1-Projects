<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'mydb';
$db_port = 3306;
$db_socket = '/Applications/MAMP/tmp/mysql/mysql.sock';


try {
  $conn = new PDO("mysql:unix_socket=$db_socket;port=$port;dbname=$db_db", $db_user, $db_password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
