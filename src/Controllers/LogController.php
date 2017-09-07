<?php

/**
 * Created by PhpStorm.
 * User: home
 * Date: 07.09.2017
 * Time: 20:24
 */
class LogController
{
    public function  view(){
        $view = new View;
        $view->render('Login');
    }
}