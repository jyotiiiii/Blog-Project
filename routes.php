<?php
//function call can be used on different objects
  function call($controller, $action) {
    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');

    // create a new instance of the needed controller
    switch($controller) {
        //for non-data-driven pages use the PagesController class
        case 'pages':
            $controller = new PagesController();
        break;

        default:
        //for all data-driven pages use a specific Controller class
        //we need the model to query the database later in the process
        require_once("models/{$controller}.php");
        $controllerClassName = $controller . 'Controller';
        $controller = new $controllerClassName();
        break;
    }
    // call the requested action
    $controller->{ $action }();
  }
//switch ($action) {
//        case 'login':
//        $blogger_id = $_POST['blogger_id'];
//        $password = $_POST['password'];    
//        
//      if($blogger_controller->login($blogger_id, $password)) {
//          header("Location:homeprivate.php");
//      } else {
//          header("Location:error.php");
//      }
//     break;
//        
//        case 'logout':
//        $blogger_controller->logout();
//        header("Location:loginprivate.php");            //header: function that redirects
//        
//    break;
//        default:
//        header("Location:loginprivate.php"); 
//    break;        
//    }
// for validation we list the allowed controllers and their actions
// Add an entry for each new controller and its actions
$controllers = array('pages' => ['home', 'error'],
                    'article' => ['readAll','read','create','update','delete'],
                    'product' => ['readAll','read','create','update','delete'],
                    'blogger' => ['login','logout','readAll','read','create','update','delete'],
                    'controllerXXX' => ['actionYYY', 'actionZZZ'],
                    );

  // check that the requested controller and action are both allowed
  // if someone tries to access something else they will be redirected 
  // to the error action of the pages controller
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
  ?>