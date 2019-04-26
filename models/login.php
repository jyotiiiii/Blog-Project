<?php

 
class authenticate{
   
        // we define 3 attributes
    public $blogger_id;
    public $username;
    public $password;
    
    
    public function __construct($blogger_id, $username, $password) {
      $this->blogger_id=$blogger_id;
      $this->username = $username;
      $this->password = $password;
    }

    public function authlogin() {
        $db = Db::getInstance();
        
        if(!empty($_POST)){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    
                    try{
                         $req =$db->prepare("SELECT * FROM blogger WHERE 'username'= ? AND 'password' =MD5(?)");
                        
                         $req->execute();
                         $authenticate = $req->fetch(); 
                         
                         if ($authenticate) {
                        header('Location: index.php');
                    } else {
                        header('Location: error.php');
                    }
                } catch (Exception $ex) {
                    $ex->getMessage();
                    exit("Something went wrong!");
                }
                $db = null;
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
}



    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
