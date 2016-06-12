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
            <ul class="nav nav-pills ">
  <li role="presentation"><a href="../../../views/ALL_CRUD/Mobile/index.php">Mobile</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Language/index.php">Language</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Birthday/index.php">Birthday</a></li>
  <li role="presentation"><a href="index.php">Gender</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/City/index.php">City</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Checkbox/index.php">Checkbox</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Summary/index.php">Summary</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Subscription/index.php">Subscription</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/ProfilePic/index.php">Profile</a></li>
</ul>
        </div>
        <fieldset class="form-group">
            <legend>Crud for Gender Detection</legend>
            <h3><?php 
            session_start();
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?></h3>
            <form class="form-horizontal" action="store.php" method="post">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">User Name</label>
                    <div class="col-sm-10">
                <input type="text" name="title" id="name" class="form-control">
                    </div>
                    </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Male/Female</label>
                    <div class="col-sm-10 form-inline">
                        Male  <input type="radio" name="gender" id="name" class="radio" value="male">
                        
                        Female  <input type="radio" name="gender" class="radio" value="female">
                    
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