<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MVC Skeleton</title>
    </head>
    <body>
        <?php
    require_once('connection.php');
    require_once('models/blogger.php');
    require_once('controllers/blogger_controller.php');
        
    @$op = $_REQUEST['op'];
    
    $blogger_controller = new Blogger_controller();
    
    switch ($op) {
        case 'login':
        $username = $_POST['username'];
        $password = $_POST['password'];    
        
      if($blogger_controller->login($username, $password)) {
          header("Location:home.php");
      } else {
          header("Location:error.php");
      }
     break;
        
        case 'logout':
        $blogger_controller->logout();
        header("Location:login.php");            //header: function that redirects
        
    break;
        default:
        header("Location:login.php"); 
    break;        
    }
    

    /*if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
  } else {
        $controller = 'pages';
        $action     = 'home';
  }
    require_once('views/layout.php'); */
        ?>
    </body>
</html>
/