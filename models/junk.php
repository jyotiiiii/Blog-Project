 public static function authlogin($username, $password) {
        if($this->authenticate($username, $password)) {
        session_start();
        $user = new authenticate($username);
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
        
    }
    }