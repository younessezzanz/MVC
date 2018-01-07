<?php
namespace PHPMVC;

use PHPMVC\LIB\Messenger;
use PHPMVC\LIB\Registry;
use PHPMVC\LIB\FrontController;
use PHPMVC\LIB\Language;
use PHPMVC\LIB\SessionManager;
use PHPMVC\LIB\Template\Template;
use PHPMVC\LIB\Authentication;

if(!defined('DS')){
    define('DS', DIRECTORY_SEPARATOR);
}
 
require_once('..' . DS . 'app' . DS . 'config' . DS . 'config.php');
require_once(APP_PATH . DS . 'lib' . DS . 'autoload.php');

$session = new SessionManager();
$session->start();

if(!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = APP_DEFAULT_LANGUAGE;
}


// return array files from file function.php
$template_parts = require_once('..' . DS . 'app' . DS . 'config' . DS . 'functions.php');

$template = new Template($template_parts);
$language = new Language();

$messenger = Messenger::getInstance($session);

$authentication = Authentication::getInstance($session);

$registry = Registry::getInstance();
$registry->session   = $session;
$registry->language  = $language;
$registry->messenger = $messenger;

$frontcontroller = new FrontController($template, $registry, $authentication);
$frontcontroller->dispatch();
