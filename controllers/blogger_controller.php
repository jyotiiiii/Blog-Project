<?php

class BloggerController {

    public function login() {
      // we expect a url of form ?controller=products&action=create
      // if it's a GET request display a blank form for creating a new product
      // else it's a POST so add to the database and redirect to readAll action
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/blogger/login.php');
      }
      else { 
            Blogger::bloggerLogin();
             
            require_once('views/blogger/userHome.php');
      }
      
    }
    

        public function register() {
        
      if ($_SERVER['REQUEST_METHOD']=='GET'){
      require_once('views/blogger/register.php');
      }else { 
         $user = Blogger::newRegister();
      
        require_once('views/blogger/login.php');
        }
      
    }
     
    public function logout(){

    session_destroy();
    
    require_once('views/blogger/login.php');
    }
}