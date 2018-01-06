<?php
namespace PHPMVC\LIB;

class Messenger
{

    const APP_MESSAGE_SUCCESS       = 'success';
    const APP_MESSAGE_ERROR         = 'danger';
    const APP_MESSAGE_WARNING       = 'warning';
    const APP_MESSAGE_INFO          = 'info';

    private static $_instance;

    private $_session;

    private $_messages = [];

    private function __construct($session) {
        $this->_session = $session;
    }

    private function __clone() {}

    public static function getInstance(SessionManager $session)
    {
        if(self::$_instance === null) {
            self::$_instance = new self($session);
        }
        return self::$_instance;
    }

    public function add($message, $title, $type = self::APP_MESSAGE_SUCCESS)
    {
        if(!$this->messagesExists()) {
            $this->_session->messages = [];
        }
        $msgs = $this->_session->messages;
        $msgs[] = [$message, $title, $type];
        $this->_session->messages = $msgs;
    }

    private function messagesExists()
    {
        return isset($this->_session->messages);
    }

    public function getMessages()
    {
        if($this->messagesExists()) {
            $this->_messages = $this->_session->messages;
            unset($this->_session->messages);
            return $this->_messages;
        }
        return [];
    }
}