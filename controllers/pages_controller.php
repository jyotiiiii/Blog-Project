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
      require_once('views/pages/hopefullyFinalAboutUsPage.php');
    }
    
    public function login(){
          require_once('views/pages/login.php');
          if($_SERVER['REQUEST_METHOD'] == 'POST') 
              
          while(!isset($_POST['submit'])){
              $username = $_POST['username'];
              $password = $_POST['password']; 
              return call('pages','about');
                   }
      
//        
        }
       
    
  
    public function logout(){}
    
    public function register(){}
}

//add login function to enable to tlogin

// another one to logout to enable to logout

//another one to register

//login - table with username and password --- create session variable called username - session start

// logout - destroy the session

//authentication model - authlogin, authlogout, authregister

//registration view, logic (Post/Get), register-post, login - get

//controller - check request method, call the database codes, 

//nav - if username exists , session stays, show logout button otherwise not.

//