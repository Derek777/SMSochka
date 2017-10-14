<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.09.2017
 * Time: 20:08
 */

namespace Core;


abstract class Controller
{

    protected $route_params = [];

    public function __call($name, $args)
    {
        $method = $name . 'Action';

        if (method_exists($this, $method)) {
            if ($this->before() !== false) {
                call_user_func_array([$this, $method], $args);
                $this->after();
            }
        } else {
//            echo "Method $method not found in controller " . get_class($this);
            throw new \Exception("Method $method not found in controller " . get_class($this));
        }
    }

    protected function before()
    {

    }

    protected function after()
    {

    }

    public function __construct($route_params)
    {
        $this->route_params = $route_params;
    }

}