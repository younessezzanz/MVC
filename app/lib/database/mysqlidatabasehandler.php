<?php
namespace PHPMVC\Lib\Database;

class MYSQLiDatabaseHandler extends DatabaseHandler
{
    private static $_handler;

    private function __construct()
    {
        self::init();
    }

    protected static function init()
    {
        try{

            self::$_handler = new \PDO('mysql://hostname=' . DB_HOST_NAME . ';dbname=' . DB_DB_NAME, DB_USER_NAME, DB_PASSWORD);
        
        }catch (\PDOException $e){
            
        }
    }

    public static function getInstance()
    {
        if(self::$_handler === null){
            self::$_handler = new self();
        }
        return self::$_handler;
    }
}