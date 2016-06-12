<?php
namespace App\ALL_CRUD\Checkbox;
class Checkbox {
    public $id='';
    public $title='';
    public $checkbox='';
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
        if(array_key_exists('checkbox',$data) && !empty($data['checkbox'])){
        $this->checkbox=$data['checkbox'];
        
        }
        return $this;
    }
    public function store(){
        $this->created_at=date('y-d-m H:m:s');
        if(!empty($this->checkbox)){
        $query="insert into checkbox (id,title,checkbox,created_at) values (null,'".$this->title."','".$this->checkbox."','".$this->created_at."')";
        $result=  mysqli_query($this->db, $query);
        if($result){
            session_start();
            $_SESSION['message']="You Agreed WIth Terms and condiiton";
            header('location:create.php');
        //return $result;
        }
        }
        else{
            session_start();
            $_SESSION['message']="Opps enter data before submit";
        header('location:create.php');
        }
    }
}
    
