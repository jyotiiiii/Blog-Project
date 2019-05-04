<!--<head>
  <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
<script>
tinymce.init({ selector: "#description",
plugins: 'link',  
      menubar:false});
tinymce.init({ selector: "#text", 
 plugins: 'link',  
      menubar:false});

</script>
 
<script>tinymce.init({selector:'textarea'});</script>
</head>
<body>-->
 

<h1>Fill in the following form to update an existing article:</h1>
<div class="wrapper">

<form action="" method="POST" class="username" enctype="multipart/form-data">
<!--    <h2>Update your Article</h2>-->
        <p>
<!--        <input class="w3-input" type="text" name="blogger_id" value="//?= $article->blogger_id; ?>">
        <label>Blogger_id</label>-->
    </p>
     <p>
         
<!--        <input class="w3-input" type="text" name="article_id" value="<?= $article->id; ?>">
        <label>Article_id</label>-->
    </p>
    <p>
        <label for="headline">Headline</label>
        <input style ="width: 42em;" class="form-control" type="text" name="headline" autofocus value="<?= $article->headline; ?>">
    </p>
   
    <p>
        <label for="description">Preview to paragraph</label>
    <p> <em>Please enter a brief description </em> </p>
    <input style ="width: 42em;"  class="form-control" id="description" type="text" name="description" value="<?= $article->description; ?>" >
    </p>
   
<!--    <p>
        <input class="w3-input" type="text" name="tag" value="<?= $article->tag; ?>" >
        <label>Tag</label>
    </p>
        <p>
        <input class="w3-input" type="text" name="tag" value="<?= $article->tag; ?>" >
        <label>Tag</label>
    </p>
        <p>
        <input class="w3-input" type="text" name="tag" value="<?= $article->tag; ?>" >
        <label>Tag</label>
    </p>-->
       
        <p>
        <label for="text">Article Body</label>

        <input style ="width: 42em;" class="form-control" id="text" type="text" id="texta" name="text" value="<?= $article->text; ?>" >
        
    </p>
   
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />

</div>
<?php 
//Need to point to pinterest url or file location
$file = 'views/images/' . $article->headline . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
  <br/>
  <input type="file" name="myUploader" class="w3-btn w3-pink" />
  <p>
      <input class="w3-btn w3-gray" type="submit" value="Update Article">
    </p>
</form>