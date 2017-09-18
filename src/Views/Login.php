<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 06.09.2017
 * Time: 21:55
 */
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
        <div class='log_form'>
            <div class="col-xs-4 col-xs-offset-4">
                <form action='/user/login' method='post'>
                    <div class="form-group">
                        <label for="InputEmail1">Login</label>
                        <input name='login' type="login" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter login">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input name='password' type="password" class="form-control" id="InputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Log in</button>
                    <form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4 text-center">
            <p class="font-weight-bold text-danger text-center ">
                <?php
                if($error){
                    echo $error;
                }
                ?>
            </p>
        </div>

    </div>
</div>
</body>
</html>
