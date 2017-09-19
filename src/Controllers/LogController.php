<?php
use Models\LogModel;
/**
 * Created by PhpStorm.
 * User: home
 * Date: 07.09.2017
 * Time: 20:24
 */
class LogController{

    public function  log_view(){
    	$log = new LogModel;
    	$logs = $log->get_all_logs();
        $view = new View(['result'=>$logs]);
        $view->render('Log');
    }

    public function insert(){
    	
    	
    }
}