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
        
    if (isset($_REQUEST['controller']) && isset($_REQUEST['action'])) {
        $controller = $_REQUEST['controller'];
        $action     = $_REQUEST['action'];
  } else {
        $controller = 'pages';
        $action     = 'homeprivate';
  }
  
  
    require_once('views/layout.php');
        ?>
    </body>
</html>

