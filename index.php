<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Honeycomb</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="https://use.typekit.net/niq6fpd.css"><!--muli type family google font-->
        <!--muli type family-->
    </head>
    <body>
        <?php
    require_once('connection.php');
        
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
  } else {
        $controller = 'pages';
        $action     = 'home';
  }
    require_once('views/layout.php');
        ?>
    </body>
</html>
