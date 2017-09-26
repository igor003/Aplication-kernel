<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 06.09.2017
 * Time: 22:01
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
<!--datapicker -->
    <script src="../js/external/jquery/jquery.js"></script>
    <script src='../js/jquery-ui.js'></script>
    <link rel="stylesheet" href="../js/jquery-ui.css">
    <link rel="stylesheet" href="../js/jquery-ui.structure.css">
    <link rel="stylesheet" href="../js/jquery-ui.theme.css">
   	<link href='../css/style.css' rel='stylesheet'>
</head>
<body>
<div class="contatiner">
     <a href=<?php echo $_SERVER['HTTP_REFERER']?>>
                    <button type="button" class="btn btn-info">
                        Back
                    </button>
                </a>
    <div class="row">	
    	<div class="col-xs-6 col-xs-offset-3">
	    <table class="table">
			<thead>
				<tr>
				  <th>Data</th>
				  <th>login</th>
				  <th>Acation</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($filter_data as $value){
				?>
					<tr>
					  <td><?php echo $value['data'] ?></td>
					  <td><?php echo $value['login'] ?></td>
					  <td><?php echo $value['action'] ?></td>
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

