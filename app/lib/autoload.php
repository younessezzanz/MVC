<?php
namespace PHPMVC\LIB;

class Autoload
{
    public static function autoload($className)
    {
        $className = str_replace('PHPMVC', '', $className);
        $className = str_replace('\\', '/', $className);
        $className = APP_PATH . $className.'.php';
        //$className = strtolower($className);
        if(!file_exists($className)){
            return;
        }
        require_once($className);
    }
}
spl_autoload_register(__NAMESPACE__ . '\Autoload::autoload');
