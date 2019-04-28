<?php

class PagesController {
    
//    // we define 3 attributes
//    public $blogger_id;
//    public $username;
//    public $password;
//    
//public function __construct($blogger_id, $username, $password) {
//      $this->blogger_id = $blogger_id;
//      $this->username = $username;
//      $this->password = $password;
//    }
//    
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
    
    public function login() {
      
            require_once('views/pages/userLogin.php'); 
      
        }
  
    public function register(){
            require_once ('views/Register.php');
            
        }
         
   
    public static function authlogin() {
    
        $db = Db::getInstance();
        
        
        if(!empty($_POST)){
            if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) )
                $req =$db->prepare("SELECT * FROM blogger WHERE 'username'= ? AND 'password' =MD5(?)");
//                $req->bind_param('s', $_POST['username'], $_POST['password']);   
                $req->execute();
                $result = $req->fetch();
               
                if (mysql_num_rows($result) == 1) {
    		$_SESSION['username'] = $_POST['username'];
                header('Location: home.php');
            }else {
        // Jump to login page
                header('Location:error.php');
            }
           
        }
    } 

    public function newRegister() {
        
        $db = Db::getInstance();
        
                try {
                    
                    $sql = "INSERT INTO blogger (first_name, last_name, username, password)
                    VALUES (?, ?, ?, MD5(?))";

                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $stmt=$db->prepare($sql);
                    $results = $stmt->execute([$first_name, $last_name, $username, $password]);
                    echo "Record successfully created.". "      <a href='login.php'>Login</a>";       

                    if ($results) {
                    echo("Record successfully created.");
                    } else {
                        throw new Exception("Something went wrong! Please try again.");
                        echo '';
                    }   

                }   catch (Exception $ex) {
                        $ex->getMessage();
                        exit("Something went wrong!");
                    }   
                
    
                   
    } 
    
    public function logout(){}
            
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
