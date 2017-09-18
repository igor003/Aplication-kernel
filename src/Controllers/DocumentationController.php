<?php
use Models\DocumentationModel;
use Models\LogModel;

class DocumentationController{
   private $params;
   private $path_to_documents = 'documents';
   public function __construct($parametrs){
   $this->params = $parametrs;
   }

   public function documentation_view(){
		$documentation = new DocumentationModel;
		$doc = $documentation->get_root_folders();
		$view = new View(['result'=>$doc]);
      $view->render('Documentation');
   }

   public function folder_form(){
      $view = new View(['id'=>$this->params]);
      $view->render('AddFolderForm');
   }

   public function file_form(){
      $view = new View(['id'=>$this->params]);
      $view->render('AddFileForm');
   }

   public function add_folder(){
		$documentation = new DocumentationModel;
		if( $documentation->insert_in_table($_POST['name_folder'],'folder',$_POST['parent_id'],date("Y-m-d H:i:s"))){
			 $log = new LogModel;
          $log->insert_record(date("Y-m-d H:i:s"),$_SESSION['cur_user']['login'],'create folder -'.$_POST['name_folder']);
			echo'Privet';
	 	}
   }

   public function add_file(){

      if($_FILES['file_name']['error'] == 0){
      $uploadfile = "documents/".$_FILES['uploadfile']['name'];
      move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile);
      $documentation = new DocumentationModel;
         if( $documentation->insert_in_table($_FILES['uploadfile']['name'],'file',$_POST['parent_id'],date("Y-m-d H:i:s"))){
          echo 'загружен';
         }
      }
   }

   public function get_files_by_parent_id(){
      $documentation = new DocumentationModel;
      $view = new View(["response"=>$documentation->get_by_parrent_id($this->params),'parametrs'=>$this->params]);
      $view->render('DocumentsById');
   }

   public function download_file(){
        //var_dump($this->path_to_documents);
      $file = '/'.$this->path_to_documents.'/'.$this->params;
      //$file = '/documents/BANDA.xlsx';
      header("Content-Length: ".filesize($this->params));
      header("Content-Disposition: attachment; filename=".$this->params); 
      header("Content-Type: application/x-force-download; name=\"".$this->params."\"");
      dfile($file_name);
   }
}