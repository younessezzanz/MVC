<?php
namespace PHPMVC\Models;

class UserGroupModel extends AbstractModel
{
    public $GroupId;
    public $GroupName;

    public static $db;
    
    protected static $tableName = TABLE_PREFIX . 'users_groups'; 
    protected static $tableSchema = array(
        'GroupId'            => self::DATA_TYPE_INT,
        'GroupName'          => self::DATA_TYPE_STR,
    );
    protected static $primaryKey = 'GroupId';

    public function __get($props)
    {
        return $this->$props;
    }


    // GroupId setters and getters
    public function setGroupId($GroupId){
        return $this->GroupId = $GroupId;
    }

    public function getGroupId(){
        return $this->GroupId;
    }

    // GroupName setters and getters
    public function setGroupName($GroupName){
        return $this->GroupName = $GroupName;
    }
    
    public function getGroupName(){
        return $this->GroupName;
    }
    
    // Get name of table
    public function getTableName()
    {
        return self::$tableName;
    }

}