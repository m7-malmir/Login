<?php

class Login extends Dbh{
        public function getUser($uname,$pass) {
        $stmt=$this->connect()->prepare("SELECT * FROM `users` WHERE `users_uid`=? and `users_pwd`=?;");
        $stmt->bindParam(1, $uname);
        $stmt->bindParam(2, $pass);
       $stmt->execute();
       
        //var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
        if($stmt->rowCount() == 0){
            var_dump($stmt);


            //header("location:../index.php?error=usernotfound!");
            exit();
        }else{
            $user= $stmt->fetchAll(PDO::FETCH_ASSOC);
            $user[0]['users_id'];
            session_start();
            $_SESSION['uid']=$user[0]['users_id'];
            $_SESSION['uname']=$user[0]['users_uid'];
        }
       $stmt=null;
    }
       
}