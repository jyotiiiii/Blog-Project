<?php

 
class Authenticate{
   
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
        
        session_start();

        try {
            $db = Db::getInstance();
            if (isset($_POST["user"])) {
                if (empty($_POST["username"]) || empty($_POST["password"])) {
                    $message = '<label>All fields are required</label>';
                } else {
                    $query = "SELECT * FROM blogger WHERE email = :email AND password = :password";
                    $statement = $connect->prepare($query);
                    $statement->execute(
                            array(
                                'email' => filter_input(INPUT_POST, "email"),
                                'password' => filter_input(INPUT_POST, "password")
                            )
                    );
                    $count = $statement->rowCount();
                    if ($count > 0) {
                        $_SESSION["email"] = filter_input(INPUT_POST, 'email');
                        header("location:auth/userHome.php");
                    } else {
                        $message = '<label>Wrong email/password combination </label>';
                    }
                }
            }
        } catch (PDOException $error) {
            $message = $error->getMessage();
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

