<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Honeycomb</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="https://use.typekit.net/niq6fpd.css"><!--muli type family google font-->
  <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  <script>tinymce.init({
      selector: 'textarea',
      plugins: 'link autoresize',  
      menubar:false 
  });
  </script>
  <script>
  tinymce.init({
      selector: '#text',
      plugins: 'link autoresize',  
      menubar:false 
  });
//  </script>
  <script>
  tinymce.init({
      selector: '#description',
      plugins: 'link autoresize',  
      menubar:false 
  });
  
  </script>

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
