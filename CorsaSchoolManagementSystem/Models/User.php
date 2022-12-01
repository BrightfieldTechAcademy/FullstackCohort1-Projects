<?php 

require("Core/init.php");

class User{
    protected Database $db;

    public function __construct(Database $db)
    {
     $this->db = $db;   
    }

    public function logIn(string $email)
    {
        $this->db->query("SELECT * from Users where email = :email");
        $this->db->bind(":email", $email);

        return $this->db->single();
    }

    public function getStudentDetails()
    {
        $this->db->query("SELECT StudentsInfo.*, StudentHealthsInfo.*, ParentsInfo.* from StudentsInfo INNER JOIN StudentHealthsInfo ON StudentsInfo.id = StudentHealthsInfo.studentId INNER JOIN ParentsInfo  ON StudentsInfo.id = ParentsInfo.studentId ;");
        
        return $this->db->resultSet();
    }
}
