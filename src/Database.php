<?php

class Database {
	private $_connection;
	private static $_instance;
	private $_host = "newpril";
    private $_username = "root";
	private $_password = "";
	private $_database = "New";
	
	public static function getInstance(){
		if(!self::$_instance){
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	private function __construct() {
		$this->_connection = new \mysqli($this->_host, $this->_username, $this->_password, $this->_database);
	}

	public function query($query){
         //echo $query;
        return $this->_connection->query($query);
    }
	
	public function query_one($query) {
		return $this->_connection->query($query)->fetch_assoc();
	}

	public function query_all($query){
		//echo ($query);
      	$result = $this->_connection->query($query);
        $res=[];
        foreach($result as $val){
            $res[] = $val;
        }
        return $res;
    }
    protected function __clone() {}
}	

