<?php

class Blogger_controller {
    public function blogger_controller() {
            
    }
    
    public function login($username, $password) {
        if($this->authenticate($username, $password)) {
            session_start();
        
        $user = new blogger($username);
        $_SESSION['user'] = $user;
        return true;
        }   else {
        return false;
            }
    }
    
static function authenticate($username, $password) {
    //$authentic = false;
    /*if ($username == 'admin' && $password == 'admin') {
            $authentic = true;
        } */
      $db = DB::getInstance();
      if ($db->prepare("SELECT * FROM blogger WHERE email = ? AND password = ?")) {
         $db->bind_param($username, $password);
         $db->execute();
         $db->store_result();
            if ($db->num_rows > 0) {
                $db->close();
                return true;
            } else {
                $db->close();
                return false;
            }
                 
        }
        else {
            die("Error: Couldn't get connection");
        }
    }   

public function logout(){
    session_start();
    session_destroy();
    }    
}



