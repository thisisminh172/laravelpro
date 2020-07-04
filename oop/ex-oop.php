<?php

class User {

    private $username;
    private $password;
    private $db_username = "minh";
    private $db_password = "unitop!@#";
    
    public function setInfo($username,$password){
        $this->username = $username;
        $this->password = $password;
    }
    
    public function checkLogin(){
        if($this->username == $this->db_username && $this->password==$this->db_password){
            echo "Xin chao: ".$this->username;
        }else{
            echo "User khong ton tai trong he thong";
        }
    }

}

$u = new User;
$u->setInfo('minh','unitop!@#');
$u->checkLogin();
