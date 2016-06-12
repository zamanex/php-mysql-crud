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
  <li role="presentation"><a href="index.php">Profile</a></li>
</ul>
        </div>
    </body>
</html>
<?php
require_once '../../../vendor/autoload.php';
use App\ALL_CRUD\ProfilePic\ProfilePic;
if(isset($_FILES)){
    $error=array();
    $image_name=  time().$_FILES['profile_pic']['name'];
    $tmp_name=$_FILES['profile_pic']['tmp_name'];
    $image_size=$_FILES['profile_pic']['size'];
    $image_ext=  strtolower(end(explode('.', $_FILES['profile_pic']['name'])));
    $image_format=array("jpeg","jpg","png");
    if(in_array($image_ext, $image_format)===FALSE){
        $error[]="file extension not allowed please select jpeg or png";
    }
    if(empty($error)===TRUE){
        move_uploaded_file($tmp_name,"../../../images/".$image_name);
        $_POST['profile_pic']=$image_name;
    }
   /* print_r($image_ext);
    print_r($image_name);
    */
}
echo "<pre>";
$profilepic=new ProfilePic();

$profilepic->prepare($_POST);
$result=$profilepic->update($_POST);