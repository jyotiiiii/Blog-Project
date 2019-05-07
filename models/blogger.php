<?php

 
class Blogger{
   
    public $blogger_id;
    public $username;
    public $password;
    
    
    public function __construct($blogger_id, $username, $password) {
      $this->blogger_id = $blogger_id;
      $this->username = $username;
      $this->password = $password;
    }

    public function bloggerLogin() {
    
        $db = Db::getInstance();
        
        $username = $_POST["username"];
        $password = md5($_POST["password"]);

        if(isset($_POST['username'])&& $_POST['username']!=""){
        $filteredUserName = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        $username = $filteredUserName;
                
        $req = $db->prepare("SELECT * FROM blogger WHERE username = :username");// AND password = :password");
        $req->bindParam(':username', $username);
        //$req->bindParam(':password', $password);

        $req->execute();
        $user = $req->fetch(PDO::FETCH_ASSOC);
        
        if($user === false){
            die("You have entered incorrect details. Please try again.");
        }
        else{
        
            if($password === $user['password']){
                $_SESSION["username"] = filter_input(INPUT_POST, 'username');
            }
            else {
                
                die("You have entered incorrect details. Please try again.");
            }
        //$validPassword = password_verify($password, $user['password']);
        
        }
        //$row = $req->fetch(PDO::FETCH_BOTH)
                       
                    //echo "Username or password is wrong.";
                    //require_once 'views/blogger/login.php';
                    //exit(0);
                
    }
                
            /*if (isset($_POST["user"])) {
                if (empty($_POST["username"]) || empty($_POST["password"])) {
                    $message = '<label>All fields are required</label>';
                } else {
                    $query = "SELECT * FROM blogger WHERE username = :username AND password = :password";
                    $statement = $connect->prepare($query);
                    $statement->execute(
                            array(
                                'username' => filter_input(INPUT_POST, "username"),
                                'password' => filter_input(INPUT_POST, "password")
                            )
                    );
                    
                    
                    
                    $count = $statement->rowCount();
                    if ($count > 0) {
                        $_SESSION["username"] = filter_input(INPUT_POST, 'username');
                }
            }
        } */
                          
   
        
    public static function newRegister() {
        
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
    

                    if ($results) {
                    echo "Record successfully created. Please ". "      <a href='login.php'>Login</a>";
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
//    public static function newRegister() {
//    $db = Db::getInstance();
//    $req = $db->prepare("INSERT INTO blogger (first_name, last_name, username, password)
//                    VALUES (?, ?, ?, MD5(?))";
//    $req->bindParam(':first_name', $first_name);
//    $req->bindParam(':last_name', $last_name);
//    $req->bindParam(':username', $username);
//    $req->bindParam(':password', $password);
//// set parameters and execute
//    if(isset($_POST['first_name'])&& $_POST['first_name']!=""){
//        $filteredFirstName = filter_input(INPUT_POST,'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
//    if(isset($_POST['last_name'])&& $_POST['last_name']!=""){
//        $filteredLastName = filter_input(INPUT_POST,'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
//    if(isset($_POST['username'])&& $_POST['username']!=""){
//        $filteredUsername = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
//    if(isset($_POST['password'])&& $_POST['password']!=""){
//        $filteredPassword = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
//$name = $filteredFirstName;
//$price = $filteredLastName;
//$username = $filteredUsername;
//$password = $filteredPassword;
//$req->execute();
//    }