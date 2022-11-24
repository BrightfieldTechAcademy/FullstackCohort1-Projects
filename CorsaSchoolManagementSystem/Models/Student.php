<?php 

require_once("Core/init.php");

class Student
{
    public string $firstName;
    public string $middleName; 

    public function __construct($firstName, $middleName)
    {
        $this->firstName = $firstName;
        $this->middleName = $middleName;

    }
}