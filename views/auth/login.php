<!DOCTYPE html>
<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["email"]))
                {
                $query = "SELECT first_name FROM blogger WHERE email = '$_SESSION[email]'";
                $statement = $connect->prepare($query);
                $statement->execute();
                $firstName = $statement->fetch();
                echo "<h3>Hi $firstName[first_name]</h3>";
                $logout = '<br /><br /><a href="logout.php">Logout</a>';
                }
                else
                {
                header("location:auth/login.php");
                }
                ?>
// Include config file
require_once('connection.php');
require_once('routes.php');

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        
        <form class="user" method="post" name="user">
            
            <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" />
                </div>
               <!--<input id="login" type="button" value="login" onclick="authlogin();" />-->
                <a href='?controller=auth&action=login'>Login</a>
            </form>
         
        </div>
            <p>Don't have an account? <a href="index.php?controller=pages&action=register">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>

