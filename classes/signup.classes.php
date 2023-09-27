<?php 

class Signup extends Dbh{

        public function insertUser($username,$password,$email){
           
           $stmt=$this->connect()->prepare("INSERT INTO `users`(`users_uid`, `users_pwd`, `users_email`) VALUES (?,?,?);");
           $stmt->bindParam(1, $username);
           $stmt->bindParam(2, $email);
           $stmt->bindParam(3, $password);
           $stmt->execute();
         }
}