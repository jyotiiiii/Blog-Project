<?php

class authenticate{

    public function authlogin() {
    
        $db = Db::getInstance();
        
        session_start();
     
        if(!empty($_POST)){
            if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) )
                $req =$db->prepare("SELECT * FROM blogger WHERE 'username'= ? AND 'password' =MD5(?)");
                $req->bind_param('s', $_POST['username'], $_POST['password']);   
                $req->execute();
                $result = $req->get_result();
                $user = $result->fetch_object();
                
                if (mysql_num_rows($result) == 1) {
    		$_SESSION['username'] = $_POST['username'];
                header('Location: home.php');
            }else {
        // Jump to login page
                header('Location:error.php');
            }
           
        }
    } 

}
    
    
    