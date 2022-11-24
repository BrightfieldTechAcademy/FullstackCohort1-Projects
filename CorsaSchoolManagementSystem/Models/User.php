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
}
