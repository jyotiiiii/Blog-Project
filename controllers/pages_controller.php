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
    
   
    
//    public function authlogin() {
//      $this->blogger_id=$blogger_id;
//      $this->username = $username;
//      $this->password = $password; 
//      $db = Db::getInstance();
//     
//    
//        if(!empty($_POST)){
//                    $username = $_POST['username'];
//                    $password = $_POST['password'];
//                    try {
//                         $req =$db->prepare("SELECT * FROM blogger WHERE 'username'= ? AND 'password' =MD5(?)");
//                        
//                         $req->execute();
//                         $results = $req->fetch();
//                                   
//                    if ($results) {
//                        header('Location: CustomerPage.php');
//                    } else {
//                        header('Location: ErrorPage.php');
//                    }
//                    }
//                 catch (Exception $ex) {
//                    $ex->getMessage();
//                    exit("Something went wrong!");
////                }
//        }
//               
//        
//               
//     } 

            

//    
//    public function logout(){}
//    
//    public function register(){}
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