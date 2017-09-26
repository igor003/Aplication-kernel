<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="/bootstrap/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap/bootstrap-3.3.2-dist/js/bootstrap.min.js" rel="stylesheet">
    <link href="/bootstrap/css/style.css" rel="stylesheet">
    <link href='/css/style.css' rel='stylesheet'>
</head>
<body>
<div class="contatiner">					
   <div class="row">
        <div class=" links col-xs-8 col-xs-offset-2">
            <?php
            if($_SESSION['cur_user']['status'] === 'admin'){
            ?>
                <a href="/user/register_view">
                    <button type="button" class="btn btn-info">Register</button>
                </a>
                <a href="/log/log_view">
                    <button type="button" class="btn btn-info">
                        Log
                    </button>
                </a>
                <a href=<?php echo "/documentation/folder_form/".Route::getInstance()->get_first_param()?>>
                    <button type="button" class="btn btn-info"> 
                        Add Folder
                    </button>
                </a>
                <a href=<?php echo "/documentation/file_form/".$parametrs?>>
                    <button type="button" class="btn btn-info">
                        Add file
                    </button>
                </a>
               
            <?php
            }
            ?>
             <a href="/documentation/documentation_view">
                    <button type="button" class="btn btn-info">
                        Home
                    </button>
                </a>
                <a href=<?php echo $_SERVER['HTTP_REFERER']?>>
                    <button type="button" class="btn btn-info">
                        Back
                    </button>
                </a>
        </div>
    </div>
	<div class="row">
        <div class=" menu_1 col-xs-4 col-xs-offset-4 text-center">
            <table class="table">
                <thead class="thead-inverse">
                    <tr>
                        <th>File name</th>
                       <?php
                        if($_SESSION['cur_user']['status'] === 'admin'){
                        ?>
                        <th>Action</th>
                        <?php
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($response as $filed){
                    ?>
                    <tr>
                    <?php
                    if($filed['type'] ==='file'){
                     ?>
                        <td>
                            <a  href=<?php echo '/documentation/download_file/'.urlencode($filed['name'])?>>
                                <img height='40px' width='40px'src="/img/File.jpg" alt="">
                                <span><?php echo $filed['name'] ?></span>
                            </a>
                        </td>
                        <?php
                        if($_SESSION['cur_user']['status'] === 'admin'){
                        ?>
                        <td>
                            <a href=<?php echo "/documentation/delete/".$filed['id'] ?>>
                                <div class='btn btn-danger'> Delete</div>
                            </a>
                        </td>
                        <?php
                        }
                        }if($filed['type'] === 'folder'){
                        ?>
                        <td>
                            <a  href=<?php echo '/documentation/get_files_by_parent_id/'.$filed['id']?>> <img height='40px' width='40px' src="/img/Folder.jpg" alt=""><span><?php echo $filed['name'] ?></span></a>
                        </td>
                        <?php
                        if($_SESSION['cur_user']['status'] === 'admin'){
                        ?>
                        <td>
                        <a href=<?php echo "/documentation/delete/".$filed['id']?>><div class='btn btn-danger'> Delete</div></a>
                        </td>
                        <?php
                        }
                        }
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>