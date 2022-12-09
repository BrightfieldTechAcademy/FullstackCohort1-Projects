<?php 

require_once("Core/init.php");

class StudentFees
{
    public int $studentId;
    public string $fullName;
    public string $gender;
    public string $class;
    public int $feeToPay;
    public int $amountPaid;
    public int $amountLeftToPaid;
    public string $term;
    public int $dateOfPayment;
}