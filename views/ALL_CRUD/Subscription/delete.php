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
  <li role="presentation"><a href="../../../views/ALL_CRUD/Gender/index.php">Gender</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/City/index.php">City</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Checkbox/index.php">Checkbox</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Summary/index.php">Summary</a></li>
  <li role="presentation"><a href="index.php">Subscription</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/ProfilePic/index.php">Profile</a></li>
</ul>
        </div>
    </body>
</html>
<?php
    require_once '../../../vendor/autoload.php';
    use App\ALL_CRUD\Subscription\Subscription;
    $subscribe=new Subscription();
    $result=$subscribe->delete($_GET);
    //echo "<pre>";
    //print_r($result);
?>