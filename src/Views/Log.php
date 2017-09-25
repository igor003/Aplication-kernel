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
    <link href='../css/style.css' rel='stylesheet'>
</head>
<body>
<div class="contatiner">
	 <div class='btn btn-default'>
       <a href='/documentation/documentation_view'>Back</a>
    </div>
    <div class="row">	
    	<div class="col-xs-4 col-xs-offset-4">
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
					foreach($result as $value){
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

