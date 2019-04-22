<?php

  class Article {

    // we define 3 attributes
    public $article_id;
    public $blogger_id;
    public $comment_id;
    public $headline;
    public $text;

    public function __construct($article_id, $blogger_id, $comment_id, $headline, $text) {
      $this->article_id    = $article_id;
      $this->blogger_id  = $blogger_id;
      $this->comment_id = $comment_id;
      $this->headline = $headline;
      $this->text = $text;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM article');
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $article) {
        $list[] = new Article($article['article_id'], $article['blogger_id'], $article['comment_id'], $article['headline'], $article['text']);
      }
      return $list;
    }

    public static function find($article_id) {
      $db = Db::getInstance();
      //use intval to make sure $article_id is an integer
      $article_id = intval($article_id);
      $req = $db->prepare('SELECT * FROM article WHERE article_id = :article_id');
      //the query was prepared, now replace :article_id with the actual $article_id value
      $req->execute(array('article_id' => $article_id));
      $article = $req->fetch();
if($article){
      return new Article($article['article_id'], $article['blogger_id'], $article['comment_id'], $article['headline'], $article['text']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }

public static function update($article_id) {
    $db = Db::getInstance();
    $req = $db->prepare("Update article set blogger_id=:blogger_id, comment_id=:comment_id, headline=:headline, text=:text where article_id=:article_id");
    $req->bindParam(':article_id', $article_id);
    $req->bindParam(':blogger_id', $blogger_id);
    $req->bindParam(':comment_id', $comment_id);
    $req->bindParam(':headline', $headline);
    $req->bindParam(':text', $text);
// set name and price parameters and execute
    
//    JYOTI CHANGE THIS CODE
    if(isset($_POST['article_id'])&& $_POST['article_id']!=""){
        $filteredArticleID = filter_input(INPUT_POST,'article_id', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['headline'])&& $_POST['headline']!=""){
        $filteredHeadline = filter_input(INPUT_POST,'headline', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['text'])&& $_POST['text']!=""){
        $filteredText = filter_input(INPUT_POST,'text', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$article_id = $filteredArticleID;
$headline = $filteredHeadline;
$text = $filteredText;
$req->execute();

//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['name'])) {
		Product::uploadFile($name);
	}

    }
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into article(headline, text) values (:headline, :text)");
    //$req->bindParam(':article_id', $article_id);
    //$req->bindParam(':blogger_id', $blogger_id);
   //$req->bindParam(':comment_id', $comment_id);
    $req->bindParam(':headline', $headline);
    $req->bindParam(':text', $text);
    
    //JYOTI CHANGE THIS CODE
// set parameters and execute
//    if(isset($_POST['article_id'])&& $_POST['article_id']!=""){
//        $filteredArticleID = filter_input(INPUT_POST,'article_id', FILTER_SANITIZE_SPECIAL_CHARS);
 //   }
    if(isset($_POST['headline'])&& $_POST['headline']!=""){
        $filteredHeadline = filter_input(INPUT_POST,'headline', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['text'])&& $_POST['text']!=""){
        $filteredText = filter_input(INPUT_POST,'text', FILTER_SANITIZE_SPECIAL_CHARS);
    }
//$article_id = $filteredArticleID;
$headline = $filteredHeadline;
$text = $filteredText;
$req->execute();

//upload product image
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
public static function remove($article_id) {
      $db = Db::getInstance();
      //make sure $article_id is an integer
      $article_id = intval($article_id);
      $req = $db->prepare('delete FROM product WHERE article_id = :article_id');
      // the query was prepared, now replace :article_id with the actual $article_id value
      $req->execute(array('article_id' => $article_id));
  }
  
}
?>