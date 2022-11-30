<?php 
include_once("Libraries/Database.php");

class User {
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

   public function getUsers(){
    $conn =  $this->db->getConnection();
    $stmt = $conn->prepare("SELECT * FROM students_info ;");
    $stmt->execute();
    
    return $stmt->fetchAll();
   }

   public function getUser($id){
    $conn =  $this->db->getConnection();
    $stmt = $conn->prepare("SELECT * FROM students_info where id = :id ;");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
   }
}
