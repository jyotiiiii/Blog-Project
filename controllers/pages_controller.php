<?php

class PagesController {
   
    public function home() {
      //example data to use in the home page
      $first_name = 'Lisa';
      $last_name  = 'Simpson';
      require_once('views/pages/home.php');
    }
    
    public function error() {
      require_once('views/pages/error.php');
    }
    
    public function about() {
      require_once('views/pages/AboutUsPage.php');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD']=='GET'){
      require_once('views/auth/login.php');
    }else 
         $user = Authenticate::authlogin();
      
        require_once('views/auth/login.php');
        }

    
        public function register() {
        
      if ($_SERVER['REQUEST_METHOD']=='GET'){
      require_once('views/auth/register.php');
      }else { 
         $user = Authenticate::newRegister();
      
        require_once('views/auth/register.php');
        }
      
    }
     
    public function logout(){
    session_start();
    session_destroy();
    }    

    }
