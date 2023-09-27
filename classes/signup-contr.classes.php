<?php
class SignupContr extends Signup{
    private $username;
    private $email;
    private $password;
    private $repassword;
    public function __construct($username,$email,$password,$repassword){
        $this->username=$username;
        $this->email=$email;
        $this->password=$password;
        $this->repassword=$repassword;
    }
    public function signupUser(){
        if(!$this->username || !$this->email || !$this->password || !$this->repassword){
            header("location:../index.html?error=emtyfieldinput");
            exit();
        }
        if($this->matchPass()==false){
            header("location:../index.html?error=passwordnotmatch");
            exit();
        }
        $this->insertUser($this->username,$this->email,$this->password);
    }
    public function matchPass(){
        if($this->password !== $this->repassword){
            $res= false;
        }else{
            $res= true;
        }
        return $res;
    }

}