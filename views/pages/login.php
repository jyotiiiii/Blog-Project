<!DOCTYPE html>
<?php
session_start();

require_once('routes.php');
require_once('connection.php');

?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="Styles.css"/>
        <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
    </head>
    <body class="login">
        <div> 
            <form class="customer" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" />
                </div>
                <input type="submit" value="Login" />
            </form>
         
        </div>
    

    </body>
</html>

 