<?php
namespace PHPMVC\Controllers;

use PHPMVC\Models\UserModel;


class UsersController extends AbstractController
{
    public function defaultAction()
    {
        $this->language->load('users|default');
        $this->language->load('template|common');
        $this->_data['users'] = UserModel::getAll();
        $this->_view();
    }

    public function addAction()
    {
        $this->language->load('users|default');
        $this->language->load('template|common');
        $this->_data['users'] = UserModel::getAll();
        $this->_view();
    }
}