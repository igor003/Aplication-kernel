<?php

/**
 * Created by PhpStorm.
 * User: home
 * Date: 29.08.2017
 * Time: 21:53
 */
class HomeController{
	private $params;

    public function __construct($parametrs){
    $this->params = $parametrs;
    }

    public function index(){
        $view = new View;
        $view->render('Login');
    }
}