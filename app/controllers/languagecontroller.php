<?php
namespace PHPMVC\Controllers;
use PHPMVC\LIB\Helper;

class LanguageController extends AbstractController
{
    use Helper;

    public function defaultAction()
    {
        if($_SESSION['lang'] == 'en') {
            $_SESSION['lang'] = 'fr';
        } else {
            $_SESSION['lang'] = 'en';
        }   
        
        $this->redirect($_SERVER['HTTP_REFERER']);

    }
}