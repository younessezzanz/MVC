<?php
namespace PHPMVC\Models;

class UserGroupPrivilegeModel extends AbstractModel
{
    public $Id;
    public $GroupId;
    public $PrivilegeId;

    public static $db;
    
    protected static $tableName = TABLE_PREFIX . 'users_groups_privileges'; 
    protected static $tableSchema = array(
        'GroupId'       => self::DATA_TYPE_INT,
        'PrivilegeId'   => self::DATA_TYPE_INT,
    );
    protected static $primaryKey = 'Id';

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

    // PrivilegeId setters and getters
    public function setPrivilegeId($PrivilegeId){
        return $this->PrivilegeId = $PrivilegeId;
    }
    
    public function getPrivilegeId(){
        return $this->PrivilegeId;
    }
    
    // Get name of table
    public function getTableName()
    {
        return self::$tableName;
    }

    public static function getGroupPrivileges(UserGroupModel $group) {
        $groupPrivileges = self::getBy(['GroupId' => $group->GroupId]);
        $extractedPrivilegesIds = [];
        if(false !== $groupPrivileges) {
            foreach ($groupPrivileges as $privilege) {
                $extractedPrivilegesIds[] = $privilege->PrivilegeId;
            }
        }
        return $extractedPrivilegesIds;
    }

    public static function getPrivilegesForGroup($groupId)
    {
        $sql = 'SELECT augp.*, aup.Privilege FROM ' . self::$tableName . ' augp';
        $sql .= ' INNER JOIN app_users_privileges aup ON aup.PrivilegeId = augp.PrivilegeId';
        $sql .= ' WHERE augp.GroupId = ' . $groupId;
        $privileges =  self::get($sql);
        $extractedUrls = [];
        if(false !== $privileges) {
            foreach ($privileges as $privilege) {
                $extractedUrls[] = $privilege->Privilege;
            }
        }
        return $extractedUrls;
    }

}