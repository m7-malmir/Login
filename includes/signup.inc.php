<?php 
include '../classes/dbh.classes.php';
include '../classes/signup.classes.php';
include '../classes/signup-contr.classes.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $uname=$_POST['uname'];
        $password=$_POST['password'];
        $repassword=$_POST['repassword'];
        $email=$_POST['email'];


        $new=new SignupContr($uname,$email,$password, $repassword);
        $new->signupUser();
        //$new->insert($uname,$password,$email);

}
