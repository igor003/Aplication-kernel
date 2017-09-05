<?php

/**
 * Created by PhpStorm.
 * User: home
 * Date: 29.08.2017
 * Time: 21:53
 */
class HomeController{

   public function index(){
        $view = new View;
        $view->render('Home');
   }
}