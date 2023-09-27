<?php 
include '../classes/dbh.classes.php';
include '../classes/login.classes.php';
include '../classes/login-contr.classes.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $uname=$_POST['uname'];
        $password=$_POST['password'];

      $newlogin=new LoginContr($uname, $password);
      $newlogin->loginUser();
//var_dump($newlogin);
      header("location: ../profile.php?error=none");
}
