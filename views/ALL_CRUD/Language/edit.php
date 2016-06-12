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
  <li role="presentation"><a href="index.php">Language</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Birthday/index.php">Birthday</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Gender/index.php">Gender</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/City/index.php">City</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Checkbox/index.php">Checkbox</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Summary/index.php">Summary</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Subscription/index.php">Subscription</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/ProfilePic/index.php">Profile</a></li>
</ul>
        </div>
        <?php
require_once '../../../vendor/autoload.php';
use App\ALL_CRUD\Language\Language;
$language=new Language();
$val=$language->view($_GET);
//print_r($result);
?>
        <div>
            <fieldset class="form-group">
                <legend>Your Favourite Programming Language</legend>
           
                <form class="form-horizontal" action="update.php" method="post">
                <div class="form-group ">
                    <label for="fortran" class="col-md-1 col-md-offset-2 control-label"><h4>Fortran</h4></label>
                    <div class="col-md-1 ">
                        <input type="checkbox" name="title[]" value="fortran" id="fortran" class="form-control"
                        <?php if(preg_match("/fortran/", $val['title'])) { echo "checked";} else{ echo "";}?>
                        >
                    </div>
                    </div>
                <div class="form-group ">
                    <label for="java" class="col-md-1 col-md-offset-2 control-label"><h4>Java</h4></label>
                    <div class="col-md-1 ">
                        <input type="checkbox" name="title[]" value="java" id="java" class="form-control"
                        <?php if(preg_match("/java/", $val['title'])) { echo "checked";} else{ echo "";}?>       
                        >
                    </div>
                    </div>
                    <div class="form-group ">
                    <label for="php" class="col-md-1 col-md-offset-2 control-label"><h4>Php</h4></label>
                    <div class="col-md-1 ">
                        <input type="checkbox" name="title[]" value="php" id="php" class="form-control"
                            <?php if(preg_match("/php/", $val['title'])) { echo "checked";} else{ echo "";}?>   
                               >
                    </div>
                    </div>
                    <div class="form-group ">
                    <label for="ruby" class="col-md-1 col-md-offset-2 control-label"><h4>Ruby</h4></label>
                    <div class="col-md-1 ">
                        <input type="checkbox" name="title[]" value="ruby" id="ruby" class="form-control"
                               <?php if(preg_match("/ruby/", $val['title'])) { echo "checked";} else{ echo "";}?>
                               >
                    </div>
                    </div>
                    <div class="form-group ">
                    <label for="scala" class="col-md-1 col-md-offset-2 control-label"><h4>Scala</h4></label>
                    <div class="col-md-1 ">
                        <input type="checkbox" name="title[]" value="scala" id="scala" class="form-control"
                               <?php if(preg_match("/scala/", $val['title'])) { echo "checked";} else{ echo "";}?>
                               >
                    </div>
                    </div>
                    <div class="form-group ">
                    <label for="python" class="col-md-1 col-md-offset-2 control-label"><h4>Python</h4></label>
                    <div class="col-md-1 ">
                        <input type="checkbox" name="title[]" value="python" id="python" class="form-control"
                               <?php if(preg_match("/python/", $val['title'])) { echo "checked";} else{ echo "";}?>
                               >
                    </div>
                    </div>
                    <div class="form-group ">
                    <label for="javascript" class="col-md-1 col-md-offset-2 control-label"><h4>Javascript</h4></label>
                    <div class="col-md-1 ">
                        <input type="checkbox" name="title[]" value="javascript" id="javascript" class="form-control"
                               <?php if(preg_match("/javascript/", $val['title'])) { echo "checked";} else{ echo "";}?>
                               >
                    </div>
                    </div>
                    <div class="form-group ">
                    <label for="assembly" class="col-md-1 col-md-offset-2 control-label"><h4>Assembly</h4></label>
                    <div class="col-md-1 ">
                        <input type="checkbox" name="title[]" value="assembly" id="assembly" class="form-control"
                               <?php if(preg_match("/assembly/", $val['title'])) { echo "checked";} else{ echo "";}?>
                               >
                    </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                <div class="col-md-offset-2 col-md-10">
                    
                    <label class="col-md-offset-1">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </label>    
                </div>
            </form>
            </fieldset>
        </div>
    </body>
</html>