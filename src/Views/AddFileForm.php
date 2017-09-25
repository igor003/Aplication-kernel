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
  <div class="container">
    <div class='btn btn-default'>
       <a href='/documentation/documentation_view'>Back</a>
    </div>
    <div class="row">
      <div class="col-xs-4 col-xs-offset-4 text-center">
        <form enctype="multipart/form-data" action="/documentation/add_file" method="POST">
          <div class="form-group">
            <label for="upload"><h1>Adauga file</h1></label>
            <input type="file" name="uploadfile" class="form-control" id="upload" placeholder="Adauga file">
            <input name='parent_id' type="hidden" value=<?php echo $id ?>>
          </div>
          <div class="form-group">
            <input type="submit">
          </div>
        </form>
        <div class="response">
        </div>
      </div>
    </div>
  </div>
</body>
</html>