<?php
namespace App\ALL_CRUD\Mobile;
class Mobile {
    public $id='';
    public $title='';
    public $description='';
    public $created_at='';
    public $updated_at='';
    public $deleted_at='';
    public $db='';
    public function __construct() {
        $this->db=  mysqli_connect("localhost","root","fazil142","atomicproject");
    }
    public function prepare($data=array()){
        if(array_key_exists('title',$data) && !empty($data['title'])){
        $this->title=$data['title'];
        }
        if(array_key_exists('description',$data) && !empty($data['description'])){
        $this->description=$data['description'];
        
        }
        return $this;
    }
    public function store(){
        $this->created_at=date('y-d-m H:m:s');
        if(!empty($this->title)){
        $query="insert into mobiles (id,title,description,created_at) values (null,'".$this->title."','".$this->description."','".$this->created_at."')";
        $result=  mysqli_query($this->db, $query);
        if($result){
            session_start();
            $_SESSION['message']="Data has been successfully added";
            header('location:index.php');
        //return $result;
        }
        }
        else{
            session_start();
            $_SESSION['message']="Opps enter data before submit";
        header('location:create.php');
        }
    }
    public function index(){
        $allmobile=array();
        $query="select * from mobiles where deleted_at IS NULL";
        $result=mysqli_query($this->db, $query);
        while($row=  mysqli_fetch_assoc($result)){
            $allmobile[]=$row;
        }
        return $allmobile;
    }
    public function view($data=''){
        $this->id=$data['id'];
        $query="select * from mobiles where id=".$this->id;
        $result=  mysqli_query($this->db, $query);
        $row=  mysqli_fetch_assoc($result);
        return $row;
    }
    public function delete($data=''){
        $this->id=$data['id'];
        $query="delete from mobiles where id=".$this->id;
        $result=mysqli_query($this->db, $query);
         if($result){
            session_start();
            $_SESSION['message']="Data has been deleted successfully";
            header('location:index.php');
        //return $result;
        }
        
    }
    public function update($data=''){
        $this->id=$data['id'];
        $this->updated_at=date('y-m-d H:m:s');
        $query="update mobiles set title='".$this->title."', description='".$this->description."' ,updated_at='".$this->updated_at."' where id=".$this->id;
        $result=mysqli_query($this->db, $query);
        if(!empty($result)){
            session_start();
            $_SESSION['message']="Updated Success";
            header('location:index.php');
        }
        
            
    }
    public function trash($data=''){
        $this->id=$data['id'];
        $this->deleted_at=date('y-m-d H:m:s');
        $query="update mobiles set deleted_at='".$this->deleted_at."' where id=".$this->id;
        $result=mysqli_query($this->db, $query);
        if(!empty($result)){
            session_start();
            $_SESSION['message']="Temporary Deleted Success";
            header('location:index.php');
        }
    }
    public function trashed(){
        $allmobile=array();
        $query="select * from mobiles where deleted_at IS NOT NULL";
        $result=mysqli_query($this->db, $query);
        while($row=  mysqli_fetch_assoc($result)){
            $allmobile[]=$row;
        }
        return $allmobile;
    }
    public function restore($data=''){
        $this->id=$data['id'];
        $query="update mobiles set deleted_at=NULL where id=".$this->id;
        $result=mysqli_query($this->db, $query);
        if(!empty($result)){
            session_start();
            $_SESSION['message']="Restored Success";
            header('location:index.php');
        }
        
    }
}
