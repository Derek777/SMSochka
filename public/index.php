<?php

//echo 'Requested URL = "' . $_SERVER['QUERY_STRING'].'"';
//require '../App/Controllers/Posts.php';
//require '../Core/Router.php';

require_once dirname(__DIR__) . '/vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

spl_autoload_register(function ($class){
    $root = dirname(__DIR__);
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) {
        require $root . '/' . str_replace('\\', '/', $class) . '.php';
    }
});

error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


$router = new Core\Router();

//echo get_class($router);

$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);
//echo '<pre>';
//var_dump($router->getRoutes());
//echo '</pre>';
//$url = $_SERVER['QUERY_STRING'];
//echo '<pre>';
//echo htmlspecialchars(print_r($router->getRoutes(), true));
//echo '</pre>';
//
//if ($router->match($url)) {
//      echo '<pre>';
//      var_dump($router->getParams());
//      echo '</pre>';
//} else {
//    echo "No route found for URL '$url'";
//}
function dd($a){
    if (!empty($a)){
              echo '<pre>';
             var_dump($a);
             echo '</pre>';
    }
}
$router->dispatch($_SERVER['QUERY_STRING']);