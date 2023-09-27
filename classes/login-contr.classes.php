<?php
class LoginContr extends Login{
    private $uname;
    private $pass;
    public function __construct($uname,$pass){
        $this->uname=$uname;
        $this->pass=$pass;
    }
    public function loginUser(){
        if($this->emptyInput()==false){
            header("location:../index.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->uname,$this->pass);
    }
    public function emptyInput(){
        $result;
        if(empty($this->uname) || empty($this->pass)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}