<?php
use Models\UserModel;
use Models\LogModel;
/**
 * Created by PhpStorm.
 * User: home
 * Date: 05.09.2017
 * Time: 21:53
 */

class UserController
{
    private $params;
    public function __construct($parametrs){
    $this->params = $parametrs;
    }

    public function register_view(){
        $view = new View;
        $view->render('Register');
    }

    public function register()
    {
        $user = new UserModel;
        $login = htmlspecialchars(trim($_POST['login']));
        $password_hash = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
        $status = $_POST['status'];
        $log = new LogModel;
        $log->inser_record(time(),$_POST['login'],'register');
        return  $user->insert_user($login, $password_hash, $status);
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

