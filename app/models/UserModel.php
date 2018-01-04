<?php
namespace PHPMVC\Models;

class UserModel extends AbstractModel
{
    public $UserId;
    public $Username;
    public $Password;
    public $Email;
    public $PhoneNumber;
    public $SubscriptionDate;
    public $LastLogin;
    public $GroupId;
    public $Status;

    public static $db;
    
    protected static $tableName = TABLE_PREFIX . 'users'; 
    protected static $tableSchema = array(
        'UserId'            => self::DATA_TYPE_INT,
        'Username'          => self::DATA_TYPE_STR,
        'Password'          => self::DATA_TYPE_STR,
        'Email'             => self::DATA_TYPE_EMAIL,
        'PhoneNumber'       => self::DATA_TYPE_STR,
        'SubscriptionDate'  => self::DATA_TYPE_DATE,
        'LastLogin'         => self::DATA_TYPE_STR,
        'GroupId'           => self::DATA_TYPE_INT,
        'Status'            => self::DATA_TYPE_STR,
    );
    protected static $primaryKey = 'UserId';

    public function __get($props)
    {
        return $this->$props;
    }


    // UserId setters and getters
    public function setUserId($UserId){
        return $this->UserId = $UserId;
    }

    public function getUserId(){
        return $this->UserId;
    }

    // Username setters and getters
    public function setUsername($Username){
        return $this->Username = $Username;
    }
    
    public function getUsername(){
        return $this->Username;
    }
    
    // Password setters and getters
    public function setPassword($Password){
        return $this->Password = $Password;
    }

    public function getPassword(){
        return $this->Password;
    }

    // Email setters and getters
    public function setEmail($Email){
        return $this->Email = $Email;
    }

    public function getEmail(){
        return $this->Email;
    }

    // PhoneNumber setters and getters
    public function setPhoneNumber($PhoneNumber){
        return $this->PhoneNumber = $PhoneNumber;
    }

    public function getPhoneNumber(){
        return $this->PhoneNumber;
    }

    // SubscriptionDate setters and getters
    public function setSubscriptionDate($SubscriptionDate){
        return $this->SubscriptionDate = $SubscriptionDate;
    }

    public function getSubscriptionDate(){
        return $this->SubscriptionDate;
    }

    // LastLogin setters and getters
    public function setLastLogin($LastLogin){
        return $this->LastLogin = $LastLogin;
    }

    public function getLastLogin(){
        return $this->LastLogin;
    }

    // GroupId setters and getters
    public function setGroupId($GroupId){
        return $this->GroupId = $GroupId;
    }

    public function getGroupId(){
        return $this->GroupId;
    }

    // Status setters and getters
    public function setStatus($Status){
        return $this->Status = $Status;
    }

    public function getStatus(){
        return $this->Status;
    }

    // Get name of table
    public function getTableName()
    {
        return self::$tableName;
    }

}