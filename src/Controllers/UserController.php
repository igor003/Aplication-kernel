<?php
use Models\UserModel;

/**
 * Created by PhpStorm.
 * User: home
 * Date: 05.09.2017
 * Time: 21:53
 */

class UserController{
    public function register(){
        $user = new UserModel;
        $users = $user->get_all_users();
        $result=['users'=>$users];
        $view = new View($result);
        $view->render('Home');
    }
}