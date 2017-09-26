<?php
use Models\UserModel;
use Models\LogModel;
use validation\Validator;
/**
 * Created by PhpStorm.
 * User: home
 * Date: 05.09.2017
 * Time: 21:53
 */

class UserController
{
    public function register_view(){
        $view = new View;
        $view->render('Register');
    }

    public function register()
    {
        $errors = [];
        $val = new Validator;
        $login = $val-> valid_login('login',5,'true');
        if(!is_array($login)){
            $login_valid = $login;
        }else{
            $errors[] = $login;
        }

        $password = $val->valid_password('password',5,'true');
        if(!is_array($password)){
            $password_hash = $password;
        }else{
            $errors[] = $password;
        }

        $status = $val->valid_input('status',3,'true');
         if(!is_array($status)){
            $status_valid = $status;
        }else{
            $errors[] = $status;
        }

        if( empty($errors)){
        $user = new UserModel;
        $log = new LogModel;
        $log->insert_record(date("Y-m-d H:i:s"),$_POST['login'],'registered');
        header('Location:/documentation/documentation_view');
        return  $user->insert_user( $login_valid, $password_hash, $status_valid );
        }else{
             $view = new View(['errors'=>$errors]);
             $view->render('Register');
        }

    
    }

    public function login()
    {
        $user = new UserModel;
        $result = $user->is_right_credentials($_POST['login'],$_POST['password']);
        if($result['is_right_credentials']){
            $_SESSION['cur_user'] = $result['user'];
            $log = new LogModel;
            $log->insert_record(date("Y-m-d H:i:s"),$_SESSION['cur_user']['login'],'login');
            header('Location:/documentation/documentation_view');
            return true;
        }
        $view = new View(['error' => 'Wrong login information!']);
        $view->render('Login');
    }
}

