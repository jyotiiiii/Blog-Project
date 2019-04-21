<?php
 session_start();
 if(isset($_SESSION['user'])) header('Location:home.php');
?>
<html>
    <head>
        <style>
            #login-controls {
                margin: 0 auto;
                border: 1px solid #ccc;
                padding: 50px;
                width: 300px;
            }
            .error-text {
                color: #f00;
            }
        </style>
    </head>    
    <body>
        <div id='login-controls'>
        <h2>Login Form</h2>
        <form method='POST' action='index.php'>
        <p>Username:<br />
            <input type='text' name='user'/>
        </p>
        <p>Password:<br />
            <input type='password' name='pass'/>
            <input type='submit' name='op' value='login'/>
        </p>
        </form>
        </div>
    </body>
</html>