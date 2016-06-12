<?php
    require_once '../../../vendor/autoload.php';
    use App\ALL_CRUD\ProfilePic\ProfilePic;
    $profile=new ProfilePic();
    $val=$profile->view($_GET);
    //echo "<pre>";
    //print_r($result);
?>
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
  <li role="presentation"><a href="../../../views/ALL_CRUD/Subscription/index.php">Subscription</a></li>
  <li role="presentation"><a href="index.php">ProfilePic</a></li>
</ul>
        </div>
        <div>
            <fieldset class="form-group">
            <legend>Crud for ProfilePic</legend>
            <form class="form-horizontal" action="update.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">User Name</label>
                    <div class="col-sm-10">
                <input type="text" name="title" id="name" class="form-control"
                       value="<?php echo $val['title'];?>"
                       >
                    </div>
                    </div>
                <div class="form-group">
                    <label for="pic" class="col-sm-2 control-label">Select Pic</label>
                    <div class="col-sm-10">
                        <input type="file" name="profile_pic" id="pic" class="form-control"
                               value="<?php echo $val['title'];?>">
                        <img src="<?php echo"../../../images/".$val['profile_pic'];?>"/>
                    </div>
                    </div>
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']?>"
                     <label>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </label>    
                </div>
            </form>
        </fieldset>
        </div>
    </body>
</html>
