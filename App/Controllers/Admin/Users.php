<?php

namespace App\Controllers\Admin;
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.09.2017
 * Time: 20:52
 */
class Users extends \Core\Controller
{

    protected function before()
    {

    }

    public function indexAction()
    {
        echo 'User admin index';
    }

}