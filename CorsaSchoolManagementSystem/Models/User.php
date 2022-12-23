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

    public function getStudentsDetails()
    {
        $this->db->query("SELECT StudentsInfo.*, StudentHealthsInfo.*, ParentsInfo.*, Classes.id AS classId, Classes.name AS className, Classes.subjects, Classes.classTeacher from StudentsInfo INNER JOIN StudentHealthsInfo ON StudentsInfo.id = StudentHealthsInfo.studentId INNER JOIN ParentsInfo ON StudentsInfo.id = ParentsInfo.studentId INNER JOIN Classes ON StudentsInfo.currentClassId = Classes.id;");
        
        return $this->db->resultSet();
    }

    public function getStudentDetails(string $id)
    {
        $this->db->query("SELECT StudentsInfo.*, StudentHealthsInfo.*, ParentsInfo.*, Classes.id AS classId, Classes.name AS className, Classes.subjects, Classes.classTeacher from StudentsInfo INNER JOIN StudentHealthsInfo ON StudentsInfo.id = StudentHealthsInfo.studentId INNER JOIN ParentsInfo ON StudentsInfo.id = ParentsInfo.studentId INNER JOIN Classes ON StudentsInfo.currentClassId = Classes.id WHERE StudentsInfo.uuid = :uuid;");
        $this->db->bind(":uuid", $id);
        return $this->db->single();
    }

    public function getStudentFees (string $id)
    {
        $this->db->query("SELECT * from StudentsFees Where studentId = :id");
        $this->db->bind(":id", $id);

        return $this->db->resultSet();
    }

    public function getClasses()
    {
        $this->db->query("SELECT * from Classes");
        
        return $this->db->resultSet();
    }
}
