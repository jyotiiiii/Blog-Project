<?php

  class Article {

    // we define 3 attributes
    public $id;
    public $blogger_id;
    public $headline;
    public $text;
  public $description; 
//    public $blogger_name; //concat first_name . last_name

      public function __construct($id, $blogger_id, $headline, $text, $description ) {
      $this->id = $id;
      $this->blogger_id = $blogger_id;
      $this->headline = $headline;
      $this->text = $text;
      $this->description = $description;
//      $this->blogger_name = $blogger_name;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM article INNER JOIN blogger
ON blogger.blogger_id = article.blogger_id');
      // we create a list of Article objects from the database results
      foreach($req->fetchAll() as $article) {
        $list[] = new Article($article['id'], $article['blogger_id'], $article['headline'], $article['text'], $article['description']);
      }
      return $list;
    }
   
      public static function blogname($id) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT first_name FROM blogger INNER JOIN article
ON article.blogger_id = blogger.blogger_id WHERE article.id = :id');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
      $article = $req->fetch();
if($article){
      return $article['first_name'];
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }
    
        public static function description($id) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT description FROM article WHERE id = :id');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
      $article = $req->fetch();
if($article){
      return $article['description'];
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }
    public static function headline($id) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT headline FROM article WHERE id = :id');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
      $article = $req->fetch();
if($article){
      return $article['headline'];
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
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
      return new Article($article['id'], $article['blogger_id'], $article['headline'], $article['text'], $article['description']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }

public static function update($id) {
    $db = Db::getInstance();
    $req = $db->prepare("Update article set 
            headline=:headline, text=:text, description=:description where id=:id");

//            . "comment_id=:comment_id, "
    $req->bindParam(':id', $id);
    $req->bindParam(':headline', $headline);
    $req->bindParam(':text', $text);
    $req->bindParam(':description', $description);

    if(isset($_POST['headline'])&& $_POST['headline']!=""){
        $filteredHeadline = filter_input(INPUT_POST,'headline', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['text'])&& $_POST['text']!=""){
        $filteredText = filter_input(INPUT_POST,'text', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['description'])&& $_POST['description']!=""){
        $filteredDescription = filter_input(INPUT_POST,'description', FILTER_SANITIZE_SPECIAL_CHARS);
    }
//$blogger_id = $filteredbloggerID;
$headline = $filteredHeadline;
$text = $filteredText;
$description = $filteredDescription;
$req->execute();

//upload article image if it exists
        if (!empty($_FILES[self::InputKey]['name'])) {
		Article::upload($headline);    //it used to be uploadFile
	}

    }
    
    public static function add() {
    /*if($_FILES){
        Article::upload($headline);
    }*/
    $db = Db::getInstance();
    $req = $db->prepare("Insert into article(headline, text, blogger_id, description) values (:headline, :text, :blogger_id, :description)");
    //$req->bindParam(':id', $id);
    $req->bindParam(':blogger_id', $blogger_id);
   //$req->bindParam(':comment_id', $comment_id);
    $req->bindParam(':headline', $headline);
    $req->bindParam(':text', $text);
    $req->bindParam(':description', $description);

    
        if(isset($_POST['blogger_id'])&& $_POST['blogger_id']!=""){
        $filteredBlogger_ID = filter_input(INPUT_POST,'blogger_id', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['headline'])&& $_POST['headline']!=""){
        $filteredHeadline = filter_input(INPUT_POST,'headline', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['text'])&& $_POST['text']!=""){
        $filteredText = filter_input(INPUT_POST,'text', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['description'])&& $_POST['description']!=""){
        $filteredDescription = filter_input(INPUT_POST,'description', FILTER_SANITIZE_SPECIAL_CHARS);
    }
//$id = $filteredArticleID;
$blogger_id = $filteredBlogger_ID;
$headline = $filteredHeadline;
$text = $filteredText;
$description = $filteredDescription;
//$req->execute();

//upload article image
Article::upload($headline);
    }

//SWITCH or Victoria's or try-catch?     
//const AllowedTypes = ['image/jpeg', 'image/jpg'. 'image/png'];
const InputKey = 'myUploader';



public static function remove($id) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('delete FROM article WHERE id = :id');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
  }
public static function upload($headline) {
        if ($_FILES) 
        {
            switch($_FILES['myUploader']['type'])
          {
           case 'image/jpg'  : $ext = 'jpg'; break;
           case 'image/jpeg' : $ext = 'jpeg'; break;
           case 'image/gif'  : $ext = 'gif'; break;
           case 'image/png'  : $ext = 'png'; break;
           case 'image/svg'  : $ext = 'svg'; break;
           default:            $ext = '';    break; 
       
          }
            if($ext) {
            $tmpImage = addslashes(file_get_contents($_FILES['myUploader']['tmp_name'])); 
            $path="/Applications/XAMPP/xamppfiles/htdocs/Blog-Project/views/images/";
            $name= $headline . ".jpeg";
            //$imageName = $path . $headline . ".jpeg";
            move_uploaded_file($_FILES['myUploader']['tmp_name'],$path . $name);
            //$name= $_FILES['myUploader']['name'];
            $db = Db::getInstance();
            $sql="INSERT INTO image VALUES('','$name','$path')";
            $db->query($sql) or die($db->error);
          
            } else {
                echo $_FILES['myUploader']['name'] . "is not accepted.";  
            } 
        
        }
            else {
                echo "No image has been uploaded.";
            }
          
        
        
        }  
  
  
    }

?>