<?php 

require_once("Core/init.php");

class StudentFees
{
    public string $studentId;
    public string $fullName;
    public string $gender;
    public string $class;
    public string $feeToPay;
    public string $amountPaid;
    public int $amountLeftToPaid;
    public string $term;
    public int $dateOfPayment;
}