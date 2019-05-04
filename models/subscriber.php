<?php

class Subscriber {
    private $first_name;
    private $email;
    
    public function __construct($first_name,$email) {
    $this->first_name = $first_name;    
    $this->email = $email;    
    }
 
public static function signUp() {
        
        $db = Db::getInstance();
        
                try {
                    
                    $first_name = $_POST['first_name'];
                    $email = $_POST['email'];
                    
                    //$sql_email = "SELECT * FROM subscribe WHERE email='".$email."'";
                    $stmt=$db->prepare("SELECT email FROM subscriber WHERE email=?");
                    $stmt->bindValue(1,$email);
                    $stmt->execute();
                    if($stmt->rowCount()>0) {
                        echo "You have already subscribed.";
                        exit(0);
                    }
                    
                    if(!preg_match("/^([a-zA-Z ]+)$/", $first_name)) {
                       echo "Invalid first name.";
                       exit(0);
                    };   
                    
                    $cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
                    if (filter_var($cleanEmail, FILTER_VALIDATE_EMAIL) === false || $cleanEmail != $email) {
                        echo "Provided email is not valid.";
                        exit(0);
                    } 
                   
                        $sql = "INSERT INTO subscriber (first_name, email)
                        VALUES (?, ?)"; 
                   
                        $stmt=$db->prepare($sql);
                        $results = $stmt->execute([$first_name, $email]);

                    
                    if ($results) {
                    echo "You have successfully signed up for the beesletter.";
                    } else {
                        throw new Exception("Something went wrong! Please try again.");
                    }  
                    
                }
                    
                catch (Exception $ex) {
                        $ex->getMessage();
                        exit("Something went wrong!");
                    }             
    }
    
}

