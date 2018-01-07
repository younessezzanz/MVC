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

    
    public function cryptPassword($password)
    {
        $this->Password = crypt($password, APP_SALT);
    }
    
     // TODO:: FIX THE TABLE ALIASING
     public static function getUsers(UserModel $user)
     {
         return self::get(
         'SELECT au.*, aug.GroupName GroupName FROM ' . self::$tableName . ' au INNER JOIN app_users_groups aug ON aug.GroupId = au.GroupId WHERE au.UserId != ' . $user->UserId
         );
     }

    public static function userExists($username)
    {
        return self::get('
            SELECT * FROM ' . self::$tableName . ' WHERE Username = "' . $username . '"
        ');
    }

    public static function userEmailExists($useremail)
    {
        return self::get('
            SELECT * FROM ' . self::$tableName . ' WHERE Email = "' . $useremail . '"
        ');
    }

    public static function authenticate ($username, $password, $session)
    {
        $password = crypt($password, APP_SALT) ;
        $sql = 'SELECT *, (SELECT GroupName FROM app_users_groups WHERE app_users_groups.GroupId = ' . self::$tableName . '.GroupId) GroupName FROM ' . self::$tableName . ' WHERE Username = "' . $username . '" AND Password = "' .  $password . '"';
        $foundUser = self::getOne($sql);
        if(false !== $foundUser) {
            if($foundUser->Status == 2) {
                return 2;
            }
            $foundUser->LastLogin = date('Y-m-d H:i:s');
            $foundUser->save();
            $foundUser->profile = UserProfileModel::getByPK($foundUser->UserId);
            $foundUser->privileges = UserGroupPrivilegeModel::getPrivilegesForGroup($foundUser->GroupId);
            $session->u = $foundUser;
            return 1;
        }
        return false;
    }

    // Get name of table
    public function getTableName()
    {
        return self::$tableName;
    }

}