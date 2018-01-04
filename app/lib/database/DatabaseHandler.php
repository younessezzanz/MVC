<?php
namespace PHPMVC\Lib\Database;

abstract class DatabaseHandler
{
    const DB_DRIVER_PDO    = 1;
    const DB_DRIVER_MYSQLI = 2;
    private static $instatnce;

    private function __construct(){}

    abstract protected static function init();
    abstract protected static function getInstance();

    public static function factory()
    {
        $driver = DB_CONN_DRIVER;

        if(is_null(self::$instatnce)){
            if($driver == self::DB_DRIVER_PDO) {
                self::$instatnce = PDODatabaseHandler::getInstance();
            }elseif ($driver == self::DB_DRIVER_MYSQLI) {
                self::$instatnce = MYSQLiDatabaseHandler::getInstance();
            }
        }

        return self::$instatnce;
        
    }
}