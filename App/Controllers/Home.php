<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.09.2017
 * Time: 19:28
 */

namespace App\Controllers;

use \Core\View;
use \App\Models\Sms;


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

        $last_sms = Sms::getLast();
//        $category = Sms::getCategory(3);

//        View::render('Home/index.php', [
//            'name'    => 'Dave',
//            'colours' => ['red', 'green', 'blue']
//        ]);
//dd($last_sms);
        View::renderTemplate('Home/index.html', [
//            'name'    => $category,
            'colours' => ['red', 'green', 'blue'],
            'text_sms' => $last_sms
        ]);
    }

}