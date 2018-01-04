<?php
namespace PHPMVC\Controllers;

use PHPMVC\Models\UserModel;
use PHPMVC\Models\UserGroupModel;


class UsersController extends AbstractController
{
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
        
        $this->_data['groups'] = UserGroupModel::getAll();

        if( isset($_POST['submit']) ) {
            var_dump($_POST);
        }

        $this->_view();
    }
}