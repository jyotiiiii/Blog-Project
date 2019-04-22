<?php

class Blogger_controller {
    //constructor
    public function blogger_controller() 
    {
    //constructor is empty for now        
    }
    public function create ($blogger_id, $password)
    {
    //creates blogger in the db
    }        
    public function login($blogger_id, $password) {
        if($this->authenticate($blogger_id, $password)) {
            //start the session for the user
            session_start();
        //instantiate the blogger object
        $user = new blogger($blogger_id);
        
        $_SESSION['blogger'] = $blogger;
        return true;
        }   else {
        return false;
            }
    }
    
static function authenticate($blogger_id, $password) {
    //$authentic = false;
    /*if ($username == 'admin' && $password == 'admin') {
            $authentic = true;
        } */
    //chack against db
      $db = DB::getInstance();
      if ($db->prepare("SELECT * FROM blogger WHERE blogger_id = ? AND password = ?")) {
         $db->bind_param($blogger_id, $password);
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



