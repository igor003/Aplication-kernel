<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 07.09.2017
 * Time: 20:20
 */

namespace Models;


class LogModel
{
    private $connection;

    public function __construct(){
        $this->connection = \Database::getInstance();
    }

    public function get_all_logs(){
        return $this->connection->query_all('SELECT * FROM log');
    }

    public function insert_record($time,$login,$action){
    	return $this->connection->query("INSERT INTO log (data,login,action) VALUES ('".$time."','".$login."','".$action."')");
    }
}