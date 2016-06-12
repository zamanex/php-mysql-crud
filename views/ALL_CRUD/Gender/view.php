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
    </body>
</html>
<?php
    require_once '../../../vendor/autoload.php';
    use App\ALL_CRUD\Gender\Gender;
    $gender=new Gender();
    $val=$gender->view($_GET);
    //echo "<pre>";
    //print_r($result);
?>
<Ul class="nav nav-pills col-md-10 col-md-offset-2 " style="font-size:18px">
    <a href="create.php">Create New</a> |
    <a href="trashed.php">Trashed Item</a>
    <br><br>
</Ul>
<table class="table col-md-10 col-md-offset-2" style="font-size: 16px">
    <tr>
        
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>
        <th>Gender</th>
    </tr>
    
   
    <tr>
        
        <td><?php echo $val['id'];?></td>
        <td><?php echo $val['title'];?></td>
        <td><?php echo $val['gender'];?></td>
        <td>
            
            <a href="edit.php?id=<?php echo $val['id'];?>">Edit</a> |
            <a href="delete.php?id=<?php echo $val['id'];?>">Delete</a> |
            <a href="trash.php?id=<?php echo $val['id'];?>">Trash</a>  |
            <a href="trashed.php?id=<?php echo $val['id'];?>">Trashed Item</a>
        </td>
    </tr>

</table>