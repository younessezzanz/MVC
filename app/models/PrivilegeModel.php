<?php
namespace PHPMVC\Models;

class PrivilegeModel extends AbstractModel
{
    public $PrivilegeId;
    public $Privilege;
    public $PrivilegeTitle;

    public static $db;
    
    protected static $tableName = TABLE_PREFIX . 'users_privileges'; 
    protected static $tableSchema = array(
        'PrivilegeId'             => self::DATA_TYPE_INT,
        'Privilege'               => self::DATA_TYPE_STR,
        'PrivilegeTitle'          => self::DATA_TYPE_STR,
    );
    protected static $primaryKey = 'PrivilegeId';

    public function __get($props)
    {
        return $this->$props;
    }


    // PrivilegeId setters and getters
    public function setPrivilegeId($PrivilegeId){
        return $this->PrivilegeId = $PrivilegeId;
    }

    public function getPrivilegeId(){
        return $this->PrivilegeId;
    }

    // Privilege setters and getters
    public function setPrivilege($Privilege){
        return $this->Privilege = $Privilege;
    }
    
    public function getPrivilege(){
        return $this->Privilege;
    }

    // Privilege setters and getters
    public function setPrivilegeTitle($PrivilegeTitle){
        return $this->PrivilegeTitle = $PrivilegeTitle;
    }
    
    public function getPrivilegeTitle(){
        return $this->PrivilegeTitle;
    }
    
    // Get name of table
    public function getTableName()
    {
        return self::$tableName;
    }

}