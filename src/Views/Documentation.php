<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 11.09.2017
 * Time: 12:07
 */
//var_dump($_SESSION['cur_user']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="../bootstrap/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/bootstrap-3.3.2-dist/js/bootstrap.min.js" rel="stylesheet">
    <link href="../bootstrap/css/style.css" rel="stylesheet">
    <link href='../css/style.css' rel='stylesheet'>
</head>
<body>
<div class="contatiner">					
    <div class="row">
    	<div class=" links col-xs-8 col-xs-offset-2">
    		<?php
    		if($_SESSION['cur_user']['status'] === 'admin'){
    		?>
    			<a href="/user/register_view">
                    <button type="button" class="btn btn-info">
                        Register
                    </button>
                </a>
    			<a href="/log/log_view">
                    <button type="button" class="btn btn-info">
                        Log
                    </button>
                </a>
    			<a href=<?php echo "/documentation/folder_form/".$result['0']['parent_id']?>>
                    <button type="button" class="btn btn-info">
                        Add Folder
                    </button>
                </a>
			<?php
		 	}
			 ?>
    	</div>
	</div>
    <div class="row">
        <div class=" menu_1 col-xs-4 col-xs-offset-4 text-center">
            <table class="table table-inverse">
                <thead>
                    <tr>
                        <?php
                        if($_SESSION['cur_user']['status'] === 'admin'){
                        ?>
                            <th>File name</th>
                            <th>Action</th>
                        <?php
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($result as $filed){
                    ?>
                        <tr>
                        <td><a href=<?php echo '/documentation/get_files_by_parent_id/'.$filed['id']?>><h1><?php echo $filed['name'] ?></h1></a></td>
                    <?php
                    if($_SESSION['cur_user']['status'] === 'admin'){
                    ?>
                        <td>
                            <a href=<?php echo"/documentation/delete/".$filed['id']?>><div class='btn btn-danger'>Delete</div></a>
                        </td>
                    <?php
                    }
                    ?>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
	   </div>	
    </div>
</div>
</body>
</html>
