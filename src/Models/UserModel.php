<?php
namespace Models;

class UserModel{
    private $connection;

    public function __construct(){
        $this->connection = \Database::getInstance();
    }

	public function is_registered($login){
        return $this->connection->query_one("SELECT * FROM user WHERE `login` = '". $login ."'");
    }

    public function get_all_users(){
        return $this->connection->query_all('SELECT * FROM user');
    }
    public function insert_user($login, $password, $status){
       return $this->connection->query("INSERT INTO `user` (login, password, status) VALUES ('".$login."','".$password."','".$status."')");
    }

}