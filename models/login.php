<?php

 
//class authenticate{
//   
//        // we define 2 attributes
// 
//    public $username;
//    public $password;
//    
//    
//    public function __construct($username, $password) {
//     
//      $this->username = $username;
//      $this->password = $password;
//    }
//
//    public function authlogin() {
//    
//        $db = Db::getInstance();
//        
//        session_start();
//     
//        if(!empty($_POST)){
//            if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) )
//                $req =$db->prepare("SELECT * FROM blogger WHERE 'username'= ? AND 'password' =MD5(?)");
//                $req->bind_param('s', $_POST['username'], $_POST['password']);   
//                $req->execute();
//                $result = $req->get_result();
//                $user = $result->fetch_object();
//                
//                if (mysql_num_rows($result) == 1) {
//    		$_SESSION['username'] = $_POST['username'];
//                header('Location: homePage.php');
//            }else {
//        // Jump to login page
//                header('Location:error.php');
//            }
//           
//        }
//    } 
//    
//    public function newRegister() {
//        
//        $db = Db::getInstance();
//        
//                try {
//                    
//                    $sql = "INSERT INTO blogger (first_name, last_name, username, password)
//                    VALUES (?, ?, ?, MD5(?))";
//
//                    $first_name = $_POST['first_name'];
//                    $last_name = $_POST['last_name'];
//                    $username = $_POST['username'];
//                    $password = $_POST['password'];
//
//                    $stmt=$db->prepare($sql);
//                    $results = $stmt->execute([$first_name, $last_name, $username, $password]);
//                    echo "Record successfully created.". "      <a href='login.php'>Login</a>";       
//
//                    if ($results) {
//                    echo("Record successfully created.");
//                    } else {
//                        throw new Exception("Something went wrong! Please try again.");
//                        echo '';
//                    }   
//
//                }   catch (Exception $ex) {
//                        $ex->getMessage();
//                        exit("Something went wrong!");
//                    }   
//                
//    
//                   
//    }        
//}



    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
