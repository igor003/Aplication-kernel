<?php

/**
 * Created by PhpStorm.
 * User: home
 * Date: 29.08.2017
 * Time: 21:39
 */
class App
{
    /**
     * App constructor.
     */
    public function __construct()
    {
        $route = new Route($_SERVER['REQUEST_URI']);
        $result = $route->get_controller_and_action();
        $class_name = $result['controller'].'Controller';
        $parametrs = $result['params'];
        //var_dump($parametrs);
        require 'Controllers/'.$class_name.'.php';
        $controller = new $class_name($parametrs);
        //var_dump($controller);
        $controller->{$result['action']}();
    }

}