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
        $login = htmlspecialchars(trim($_POST['login']));
        $password_hash = password_hash(htmlspecialchars(trim($_POST['password'])), PASSWORD_DEFAULT);
        $status = $_POST['status'];
        print_r($_POST);
        $users = $user->insert_user($login, $password_hash, $status);
       if($users){
           echo 'zapisalosi';
       }else{
           echo 'nezapisalosi';
       }
    }
    public function login(){
        $user = new UserModel;
        $cur_user = $user->is_registered($_POST['login']);
        print_r($cur_user);

        //$view = new View;
        //$view->render('Register');
    }
}