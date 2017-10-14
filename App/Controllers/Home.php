<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.09.2017
 * Time: 19:28
 */

namespace App\Controllers;

use \Core\View;


class Home extends \Core\Controller
{

    protected function before()
    {
//        echo "before";
    }

    protected function after()
    {
//        echo "after";
    }

    public function indexAction()
    {
//        View::render('Home/index.php', [
//            'name'    => 'Dave',
//            'colours' => ['red', 'green', 'blue']
//        ]);
        View::renderTemplate('Home/index.html', [
            'name'    => 'Dave',
            'colours' => ['red', 'green', 'blue']
        ]);
    }

}