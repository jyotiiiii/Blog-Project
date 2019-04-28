<!DOCTYPE html>

<?php
// Initialize the session
session_start();

if ( isset( $_SESSION['$username'] ) ) {
    header("Location:homePage.php");

}
    // Grab user data from the database using the blogger_id
    // Let them access the "logged in only" pages

    // Redirect them to the login page
    

// Include config file
require_once('routes.php');
require_once('connection.php');
?>


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
        
        <form class="username" method="post">
            
            <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" />
                </div>
<!--               <input id="login" type="button" value="login" onclick="authlogin();" />-->
                <a href='?controller=pages&action=authlogin'>Login</a>
            </form>
         
        </div>
            <p>Don't have an account? <a href="Register.php">Sign up now</a>.</p>
        
    
</body>
</html>
