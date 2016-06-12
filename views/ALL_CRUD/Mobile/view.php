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
            <ul class="nav nav-pills col-md-10 col-md-offset-2">
  <li role="presentation"><a href="index.php">Mobile</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Language/index.php">Language</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Birthday/index.php">Birthday</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Gender/index.php">Gender</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/City/index.php">City</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Checkbox/index.php">Checkbox</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Summary/index.php">Summary</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Subscription/index.php">Subscription</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/ProfilePic/index.php">Profile</a></li>
</ul>
            
        </div>
    </body>
</html>
<?php
    require_once '../../../vendor/autoload.php';
    use App\ALL_CRUD\Mobile\Mobile;
    $mobile=new Mobile();
    $val=$mobile->view($_GET);
    //echo "<pre>";
    //print_r($result);
?>
<Ul class="nav nav-pills col-md-10 col-md-offset-2 " style="font-size:18px">
    <a href="create.php">Create New</a> |
    <a href="trashed.php">Trashed Item</a>
    <br><br>
</Ul>
<table class="table col-md-10 col-md-offset-1" style="font-size: 16px">
    <tr>
       
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Action</th>
    </tr>
    
    
    <tr>
        
        <td><?php echo $val['id'];?></td>
        <td><?php echo $val['title'];?></td>
        <td><?php echo $val['description'];?></td>
        <td><?php echo $val['created_at'];?></td>
        <td><?php 
            if(empty($val['updated_at'])){
                echo "Not Updated Yet";
            }
            else{
        echo $val['updated_at'];
            }?></td>
        <td>
            
            <a href="">Edit</a> |
            <a href="">Delete</a> |
            <a href="">Trash</a>  |
            <a href="">Trashed Item</a>
        </td>
    </tr>

</table>