<?php
use Models\DocumentationModel;
use Models\LogModel;

class DocumentationController
{

    private $path_to_documents = 'documents';
    public function documentation_view()
    {
        $documentation = new DocumentationModel;
        $doc = $documentation->get_root_folders();
        $view = new View(['result' => $doc]);
        $view->render('Documentation');
    }

    public function folder_form()
    {
        $view = new View(['id' => Route::getInstance()->get_first_param()]);
        $view->render('AddFolderForm');
    }

    public function file_form()
    {
        $view = new View(['id' => Route::getInstance()->get_first_param()]);
        $view->render('AddFileForm');
    }

    public function add_folder()
    {
       if($_POST['name_folder']!==''){
            $documentation = new DocumentationModel;
            if ($documentation->insert_in_table($_POST['name_folder'], 'folder', Route::getInstance()->get_first_param(), date("Y-m-d H:i:s"))) {
                $log = new LogModel;
                $log->insert_record(date("Y-m-d H:i:s"), $_SESSION['cur_user']['login'], 'create folder -' . $_POST['name_folder']);
                header('Location:/documentation/documentation_view');
            }
        }
           
        
    }

    public function add_file()
    {
        if ($_FILES['file_name']['error'] == 0) {
            $uploadfile = "documents/" . $_FILES['uploadfile']['name'];
            move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile);
            $documentation = new DocumentationModel;
            if ($documentation->insert_in_table($_FILES['uploadfile']['name'], 'file', $_POST['parent_id'], date("Y-m-d H:i:s"))) {
                $log = new LogModel;
                $log->insert_record(date("Y-m-d H:i:s"), $_SESSION['cur_user']['login'], 'added file  ' . $_FILES['uploadfile']['name']);
                header('Location:'.$_SERVER['HTTP_REFERER']);
            }
        }
    }

    public function get_files_by_parent_id()
    {
        $id = Route::getInstance()->get_first_param();
        $documentation = new DocumentationModel;
        $view = new View(["response" => $documentation->get_by_parrent_id($id), 'parametrs' => $id]);
        $view->render('DocumentsById');
    }

    public function download_file()
    {
        $file = $this->path_to_documents . '/' . urldecode(Route::getInstance()->get_first_param());
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($file));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            $log = new LogModel;
            $log->insert_record(date("Y-m-d H:i:s"), $_SESSION['cur_user']['login'], 'downloadd file -' . Route::getInstance()->get_first_param());
        }
    }
    public function delete(){

        $documentation = new DocumentationModel;
        $documentation->delete(Route::getInstance()->get_first_param());
        $log = new LogModel;
        $log->insert_record(date("Y-m-d H:i:s"), $_SESSION['cur_user']['login'], 'deleted file -' . Route::getInstance()->get_first_param());
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }
}