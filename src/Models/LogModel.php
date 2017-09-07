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
        $this->connection->query_all('SELECT * FROM log');
    }
}