<?php 

include("Libraries/Database.php");

class User{
    private Database $db;

    public function __construct(Database $db)
    {
     $this->db = $db;   
    }
}
