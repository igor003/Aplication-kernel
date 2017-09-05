<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 29.08.2017
 * Time: 21:40
 */
class Route{
    private $uri;
    public function __construct($uri){
        $this->uri = $uri;
    }

    public function get_controller_and_action(){
        $uri_parts = explode('/', $this->uri);
        if(!$uri_parts[1]){
            $uri_parts[1] = 'Home';
        }
        if(!$uri_parts[2]){
            $uri_parts[2] = 'index';
        }

        return ['controller'=>ucfirst($uri_parts[1]),'action'=>strtolower($uri_parts[2])];
    }
}