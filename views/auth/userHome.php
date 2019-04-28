session_start();
<?php
require_once 'models/auth.php';                 //line 2-11 this code will be needed in the final homepage. so that Without login we can't access the homepage.
session_start();

if(!isset($_SESSION['user'])){
    header("Location:pages/login.php");
    }
else {
    $username = $_SESSION['user'];
}
?>
    

<p>Hello there <?php echo $first_name . ' ' . $last_name; ?>!<p>
<p>The above data is present to demonstrate the utilisation of variables 
populated earlier within the page processing</p>
<p>This is the home page of the Blog for logged in users</p>

<a href="indexPrivate.php?action=logout">Log out</a>