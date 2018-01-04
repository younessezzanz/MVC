<?php
namespace PHPMVC\Models;

class EmployeeModel extends AbstractModel
{
    public $employeeNumber;
    public $lastName;
    public $firstName;
    public $extension;
    public $email;
    public $officeCode;
    public $reportsTo;
    public $jobTitle;

    
    public static $db;

    protected static $tableName = 'employees';
    protected static $tableSchema = array(
        'employeeNumber' => self::DATA_TYPE_INT,
        'lastName'       => self::DATA_TYPE_STR,
        'firstName'      => self::DATA_TYPE_STR,
        'extension'      => self::DATA_TYPE_STR,
        'email'          => self::DATA_TYPE_EMAIL,
        'officeCode'     => self::DATA_TYPE_INT,
        'reportsTo'      => self::DATA_TYPE_INT,
        'jobTitle'       => self::DATA_TYPE_STR,
    );
    protected static $primaryKey = 'employeeNumber';

    /* public function __construct($lastName, $firstName, $extension, $email, $officeCode, $reportsTo, $jobTitle)
    {
        $this->lastName         = $lastName;
        $this->firstName        = $firstName;
        $this->extension        = $extension;
        $this->email            = $email;
        $this->officeCode       = $officeCode;
        $this->reportsTo        = $reportsTo;
        $this->jobTitle         = $jobTitle;
    } */

    public function __get($props)
    {
        return $this->$props;
    }

    // EmployeeNumber setters and getters
    public function setEmployeeNumber($employeeNumber){
        return $this->employeeNumber = $employeeNumber;
    }

    public function getEmployeeNumber(){
        return $this->employeeNumber;
    }

    // LastName setters and getters
    public function setLastName($lastName){
        return $this->lastName = $lastName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    // FirstName setters and getters
    public function setFirstName($firstName){
        return $this->firstName = $firstName;
    }
    
    public function getFirstName(){
        return $this->firstName;
    }
    
    // Extension setters and getters
    public function setExtension($extension){
        return $this->extension = $extension;
    }

    public function getExtension(){
        return $this->extension;
    }

    // Email setters and getters
    public function setEmail($email){
        return $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    // OfficeCode setters and getters
    public function setOfficeCode($officeCode){
        return $this->officeCode = $officeCode;
    }

    public function getOfficeCode(){
        return $this->officeCode;
    }

    // ReportsTo setters and getters
    public function setReportsTo($reportsTo){
        return $this->reportsTo = $reportsTo;
    }

    public function getReportsTo(){
        return $this->reportsTo;
    }

    // JobTitle setters and getters
    public function setJobTitle($jobTitle){
        return $this->jobTitle = $jobTitle;
    }

    public function getJobTitle(){
        return $this->jobTitle;
    }

    // Get name of table
    public function getTableName()
    {
        return self::$tableName;
    }

}