<?php
  class Article {

    // we define 3 attributes
    public $id;
    public $blogger_id;
    public $headline;
    public $text;
//    public $blogger_name; //concat first_name . last_name

    public function __construct($id, $blogger_id, $headline, $text) {
      $this->id = $id;
      $this->blogger_id = $blogger_id;
      $this->headline = $headline;
      $this->text = $text;
//      $this->blogger_name = $blogger_name;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM article INNER JOIN blogger
ON blogger.blogger_id = article.blogger_id');
      // we create a list of Article objects from the database results
      foreach($req->fetchAll() as $article) {
        $list[] = new Article($article['id'], $article['blogger_id'], $article['headline'], $article['text']);
      }
      return $list;
    }
    public static function find($id) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM article INNER JOIN blogger
ON blogger.blogger_id = article.blogger_id WHERE id = :id');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
      $article = $req->fetch();
if($article){
      return new Article($article['id'], $article['blogger_id'], $article['headline'], $article['text']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }
    
//    public static function find($id) {
//      $db = Db::getInstance();
//      //use intval to make sure $id is an integer
//      $id = intval($id);
//      
//      $req = $db->prepare("SELECT concat(blogger.first_name, ' ', blogger.last_name),
//          article.headline, article.text
//    FROM Article
//    INNER JOIN blogger
//    ON blogger.blogger_id = article.blogger_id");
//      //the query was prepared, now replace :id with the actual $id value
//      $req->execute(array('id' => $id));
//      $article = $req->fetch();
//if($article){
//      return new Article($article['headline'], $article['first_name'], $article['text']);
//    }
//    else
//    {
//        //replace with a more meaningful exception
//        throw new Exception('A real exception should go here');
//    }
//    }

public static function update($id) {
    $db = Db::getInstance();
    $req = $db->prepare("Update article set blogger_id=:blogger_id, comment_id=:comment_id, headline=:headline, text=:text where id=:id");
    $req->bindParam(':id', $id);
    $req->bindParam(':blogger_id', $blogger_id);
    $req->bindParam(':comment_id', $comment_id);
    $req->bindParam(':headline', $headline);
    $req->bindParam(':text', $text);
// set name and price parameters and execute
    
//    JYOTI CHANGE THIS CODE
    if(isset($_POST['id'])&& $_POST['id']!=""){
        $filteredArticleID = filter_input(INPUT_POST,'id', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['headline'])&& $_POST['headline']!=""){
        $filteredHeadline = filter_input(INPUT_POST,'headline', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['text'])&& $_POST['text']!=""){
        $filteredText = filter_input(INPUT_POST,'text', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$id = $filteredArticleID;
$headline = $filteredHeadline;
$text = $filteredText;
$req->execute();

//upload article image if it exists
        if (!empty($_FILES[self::InputKey]['name'])) {
		Article::uploadFile($name);
	}

    }
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into article(headline, text, blogger_id) values (:headline, :text, :blogger_id)");
    //$req->bindParam(':id', $id);
    $req->bindParam(':blogger_id', $blogger_id);
   //$req->bindParam(':comment_id', $comment_id);
    $req->bindParam(':headline', $headline);
    $req->bindParam(':text', $text);
    
    //JYOTI CHANGE THIS CODE
// set parameters and execute
//    if(isset($_POST['id'])&& $_POST['id']!=""){
//        $filteredArticleID = filter_input(INPUT_POST,'id', FILTER_SANITIZE_SPECIAL_CHARS);
 //   }
        if(isset($_POST['blogger_id'])&& $_POST['blogger_id']!=""){
        $filteredBlogger_ID = filter_input(INPUT_POST,'blogger_id', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['headline'])&& $_POST['headline']!=""){
        $filteredHeadline = filter_input(INPUT_POST,'headline', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['text'])&& $_POST['text']!=""){
        $filteredText = filter_input(INPUT_POST,'text', FILTER_SANITIZE_SPECIAL_CHARS);
    }
//$id = $filteredArticleID;
$blogger_id = $filteredBlogger_ID;
$headline = $filteredHeadline;
$text = $filteredText;
$req->execute();

//upload article image
//Article::uploadFile($name);
    }

const AllowedTypes = ['image/jpeg', 'image/jpg'. 'image/png'];
const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
//public static function uploadFile(string $name) {
//
//	if (empty($_FILES[self::InputKey])) {
//		//die("File Missing!");
//                trigger_error("File Missing!");
//	}
//
//	if ($_FILES[self::InputKey]['error'] > 0) {
//		trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
//	}
//
//
//	if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
//		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
//	}
//
//	$tempFile = $_FILES[self::InputKey]['tmp_name'];
////        $path = "C:/xampp/htdocs/MVC_Skeleton/views/images/";
//        $path = "C:/xampp/htdocs/Blog-Project/Blog-Project-Jyoti/views/images/";
//	$destinationFile = $path . $name . '.jpeg';
//
//	if (!move_uploaded_file($tempFile, $destinationFile)) {
//		trigger_error("Handle Error");
//	}
//		
//	//Clean up the temp file
//	if (file_exists($tempFile)) {
//		unlink($tempFile); 
//	}
//}
public static function remove($id) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('delete FROM article WHERE id = :id');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
  }
  
}
?>