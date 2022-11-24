<?php 

require("Core/init.php");

class Admin extends User
{
    public function addStudent(Student $student)
    {
        $sql = "INSERT INTO StudentsInfo(firstname, middlename) VALUES(:firstName, :middleName, :password);";
        $this->db->query($sql);
        $this->db->bind(":firstName", $student->firstName);
        $this->db->bind(":middleName",$student->middleName);

        try {
            $this->db->execute();
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        
        
    }

}