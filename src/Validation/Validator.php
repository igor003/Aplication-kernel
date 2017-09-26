<?php
namespace Validation;
class Validator{
    private $errors = [];
    //parametr 1 - input form - name of input
    //parametr 2 - lenght of data - number 1 ...20;
    //parametr 3 - required data or optional - true/false

    public function valid_login($input_name,$length = 5,$required){
         $error_login = [];
        if($_POST[$input_name] === '' and $required === 'true'){
            $error_login[] = 'login is required';
            return  $error_login;
        }else{
            if(strlen($_POST[$input_name])>$length){
                return htmlspecialchars(trim($_POST[$input_name]));
            }else{
                $error_login[] = 'The length of login mast should be longer!';
                return $error_login;
            }
        }
    }
    public function valid_password($input_name,$length = 5,$required){
       $password_error = [];
        if($_POST[$input_name] === '' and $required === 'true'){
            $password_error [] = 'Password is required';
            return  $password_error ;
        }else {
            if (is_numeric($_POST[$input_name]) === true) {
                if (strlen($_POST[$input_name]) > $length) {
                    return password_hash(trim($_POST[$input_name]), PASSWORD_DEFAULT);
                } else {
                    $password_error [] = 'The length of password mast should be longer!';
                    return $password_error ;
                }
            } else {
                $password_error [] = 'Password mast should be numeric!';
                return $password_error ;
            }
        }
    }
    public function valid_input($input_name,$length = 5,$required){
        $input_error = [];
        if($_POST[$input_name] === '' and $required === 'true'){
            $input_error[] = 'Status is required';
            return $input_error;
        }else {
            if(strlen($_POST[$input_name])>$length){
                return true;
            }else{
                $input_error[] = 'The length of status mast should be longer!';
                return $input_error;
            }
        }
    }
}