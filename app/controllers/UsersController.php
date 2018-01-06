<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\LIB\Messenger;
use PHPMVC\Models\UserGroupModel;
use PHPMVC\Models\UserModel;
use PHPMVC\Models\UserProfileModel;
use PHPMVC\LIB\Language;


class UsersController extends AbstractController
{

    private $_createActionRoles =
    [
        'FirstName'     => 'req|alpha|between(3,10)',
        'LastName'      => 'req|alpha|between(3,10)',
        'Username'      => 'req|alphanum|between(3,12)',
        'Password'      => 'req|min(6)|eq_field(CPassword)',
        'CPassword'     => 'req|min(6)',
        'Email'         => 'req|email|eq_field(CEmail)',
        'CEmail'        => 'req|email',
        'PhoneNumber'   => 'alphanum|max(15)',
        'GroupId'       => 'req|int'
    ];
    private $_editActionRoles =
    [
        'PhoneNumber'   => 'alphanum|max(15)',
        'GroupId'       => 'req|int'
    ];

    public function defaultAction()
    {
        $this->language->load('users|default');
        $this->language->load('template|common');

        $this->_data['users'] = UserModel::getAll();
        $this->_view();
    }

    public function createAction()
    {
        $this->language->load('users|default');
        $this->language->load('users|labels');
        $this->language->load('template|common');
        $this->language->load('users|messages');
        $this->language->load('validation|errors');
        
        $this->_data['groups'] = UserGroupModel::getAll();

        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {
            var_dump($_POST);
        }

        $this->_view();
    }
}