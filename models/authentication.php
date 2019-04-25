<?php
 session_start();
 
class authenticate{

public function authlogin()
{ if(!empty($_POST)){
               $username = $_POST['username'];
               $password = $_POST['password'];
               try {
                   $sql = ("SELECT * FROM blogger WHERE 'username'= ? AND 'password' =MD5(?)");
                   $login =$stmt->prepare($sql);
                   $login->execute([$username, $password]);
                   $exists = $login->fetch();
                    
                   } catch (Exception $ex) {
                   $ex->getMessage();
                   exit("Something went wrong!");
               }
                   if(isset($_SESSION["username"])){
                   $message = "<p> Welcome, </p>" .$_SESSION["username"];
                   if ($exists) {
                       header('Location: index.php');
                   } else {
                       header('Location: error.php');
                   }
               }  
}
}


