<?php

class Database {
  private $db_name = "csms";
  private $db_host = "localhost";
  private $db_user = "root";
  private $db_password = "oli@MEN2018";
  private $conn;

  public function __construct(){
    try {
      $this->conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  public function getConnection(){
    return $this->conn;
  }

}


?>


