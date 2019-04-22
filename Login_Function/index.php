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
        if($this->authenticate($username, $password)) {
             //start the session for the user    
            session_start();
            //instantiate the UserModel object
        $user = new blogger($username);
        //set the user object to the session
        $_SESSION['user'] = $blogger;
        //we tell the system that we autheticated the user
        return true;
        }   else {
            //we tell the system that we could not
        return false;
            }
    }
    
static function authenticate($blogger_id, $password) {
    //$authentic = false;
    /*if ($username == 'admin' && $password == 'admin') {
            $authentic = true;
        } */
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

public function logout()
        {
    //does logout procedures
    session_start();
    session_destroy();
    }    
}