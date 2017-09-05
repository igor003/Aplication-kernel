<?php
namespace Models;

class UserModel{
    private $connection;

    public function __construct(){
        $this->connection = \Database::getInstance();
    }

	public function is_registered($login,$password){
        return boolval($this->connection->query_one("SELECT * FROM user WHERE `login` = '" . $login . "' AND `password` = '" . $password . "'"));
    }

    public function get_all_users(){
        return $this->connection->query_all('SELECT * FROM user');
    }

}