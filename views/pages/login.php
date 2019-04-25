<?php
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
        <p>Blogger ID:<br />
            <input type='text' name='username'/>
        </p>
        <p>Password:<br />
            <input type='password' name='pass'/>
            <input type='submit' name='action' value='login'/>
        </p>
        </form>
        </div>
    </body>
</html>
<?php
 require_once('routes.php');
 ?>