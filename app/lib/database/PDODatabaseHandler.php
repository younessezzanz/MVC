<?php
namespace PHPMVC\Lib\Database;

class PDODatabaseHandler extends DatabaseHandler
{
    private static $_instance;
    private static $_handler;

    private function __construct()
    {
        self::init();
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array(array(&self::$_handler, $name), $arguments);
    }
    
    protected static function init()
    {
        try{

            //self::$_handler = new \PDO('mysql://hostname=' . DB_HOST_NAME . ';dbname=' . DB_DB_NAME, DB_USER_NAME, DB_PASSWORD);
            self::$_handler = new \PDO('mysql:host='.DB_HOST_NAME.';port=3306;dbname='.DB_DB_NAME.';charset=utf8',DB_USER_NAME,DB_PASSWORD,array(
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                                ));
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if(self::$_instance === null){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}