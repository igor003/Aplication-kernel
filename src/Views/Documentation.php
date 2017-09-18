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
    	<div class="col-xs-8 col-xs-offset-2">
    		<?php
    		if($_SESSION['cur_user']['status'] === 'admin'){
    		?>
    			<a href="/user/register_view">Register</a>
    			<a href="/log/log_view">Log</a>
    			<a href=<?php echo "/documentation/folder_form/".$result['0']['parent_id']?>>Add Folder</a>
			<?php
		 	}
			 ?>
    	</div>
	</div>
    <div class="row">
        <div class=" menu_1 col-xs-4 col-xs-offset-4 text-center">
              <ul class="nav nav-pills nav-stacked">
              	<?php
                //var_dump($result['0']['parent_id']);
                foreach($result as $filed){
            	?>
                    <li role="presentation"><a href=<?php echo '/documentation/get_files_by_parent_id/'.$filed['id']?>><h1><?php echo $filed['name'] ?></h1></a></li>
                <?php
                }
                ?>
              </ul>
        </div>
	</div>	
</div>
</body>
</html>
