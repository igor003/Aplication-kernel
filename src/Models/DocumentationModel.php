<?php
namespace Models;

class DocumentationModel{

	private $connection;

    public function __construct(){
        $this->connection = \Database::getInstance();
    }

    public function get_root_folders(){
 		return $this->connection->query_all('SELECT * FROM `documentation` WHERE parent_id = 0');
    }

    public function insert_in_table($name, $type, $parent_id, $time){
		return $this->connection->query("INSERT INTO `documentation` (name, type, parent_id, created_at) VALUES ('".$name."','".$type."','".$parent_id."','".$time."')");
    }
    public function get_by_parrent_id($parrent_id){
        return $this->connection->query_all("SELECT * FROM `documentation` WHERE parent_id = ".$parrent_id);
    }
    public function delete ($id){
        return $this->connection->query("DELETE FROM `documentation` WHERE id=".$id);
    }

}