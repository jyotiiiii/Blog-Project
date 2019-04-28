<!DOCTYPE html>
<?php
//$db_host = "localhost";
//$db_name = "blog";
//$db_username = "root";
//$db_password = "";
//$dsn = "mysql:host=$db_host; dbname=$db_name";
////Try and catch, to catch the PDO if there is an error 
////connecting with database
//try {
//$db_connection = new PDO($dsn, $db_username, $db_password);
//}
//catch(PDOException $e) {
//    echo "There was a failure connecting with the database. 
//         Please check your connection and try again." . $e->getMessage();
//          
//}
//$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
  require_once "../../connection.php";
  $db = Db::getInstance();
    
if (isset($_POST['postComment'])) {
    try {
        $comment = ($_POST['comment_text']);
        $query = "INSERT INTO Comments (comment_text) 
              VALUES (:comment_text)";
        $result = $db_connection->prepare($query);
        $result->execute([
            'comment_text' => $comment
           
        ]);
        echo "Your comment has successfully sent!";
    } catch (Exception $ex) {
        header('Location: Error.php');
        exit();
    }
}
?>

 <html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>

    <body>

    <br>
<!--    -----------comment----------->
        <div class="container">
          <form method="post" action="">
            <div class="form-group row">
                <label for="comment_text" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="comment_text" value="">
                    </div>
            </div>
                    <button type="submit" name="postComment" class="btn btn-success">Add Comment</button>

          </form>
        </div>
  </body>

  </html>


