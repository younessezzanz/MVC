<?php
namespace PHPMVC\LIB;


class Authentication
{
    private static $_instance;
    private $_session;

    private $_execludedRoutes = [
        '/index/default',
        '/auth/logout',
        '/users/default',
        '/users/create',
        '/users/edit',
        '/users/delete',
        '/usersgroups/default',
        '/usersgroups/create',
        '/usersgroups/edit',
        '/usersgroups/delete',
        '/privileges/default',
        '/privileges/create',
        '/privileges/edit',
        '/privileges/delete',
        '/language/default',
        '/NotFound/notFound',
        '/accessdenied/default',
        '/test/default'
    ];

    private function __construct($session)
    {
        $this->_session = $session;
    }

    private function __clone()
    {

    }

    public static function getInstance(SessionManager $session)
    {
        if(self::$_instance === null) {
            self::$_instance = new self($session);
        }
        return self::$_instance;
    }

    public function isAuthorized()
    {
        return isset($this->_session->u);
    }

    public function hasAccess($controller, $action)
    {
        $url = strtolower('/' . $controller . '/' . $action);
        if(in_array($url, $this->_execludedRoutes) || in_array($url, $this->_session->u->privileges)) {
            return true;
        }
    }
}