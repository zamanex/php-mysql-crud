<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../css/style.css">
    </head>
    <body>
        
        <div>
            <ul class="nav nav-pills">
  <li role="presentation"><a href="index.php">Mobile</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Language/index.php">Language</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Birthday/index.php">Birthday</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Gender/index.php">Gender</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/City/index.php">City</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Checkbox/index.php">Checkbox</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Summary/index.php">Summary</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Subscription/index.php">Subscription</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/ProfilePic/index.php">Profile</a></li>
</ul><br>
        </div>
        <fieldset class="form-group">
            <legend>Crud for Mobile Model</legend>
            <h3><?php 
            session_start();
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?></h3>
            <form class="form-horizontal" action="store.php" method="post">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Model Name</label>
                    <div class="col-sm-10">
                <input type="text" name="title" id="name" class="form-control">
                    </div>
                    </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Model Feature</label>
                    <div class="col-sm-10">
                <input type="text" name="description" id="name" class="form-control">
                    </div>
                    </div>
                <div class="col-sm-offset-2 col-sm-10">
                    
                    <label>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </label>    
                </div>
            </form>
        </fieldset>
    </body>
</html>