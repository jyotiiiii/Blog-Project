<p>Fill in the following form to update an existing article:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update your Article</h2>
        <p>
        <input class="w3-input" type="text" name="article_id" value="<?= $article->id; ?>">
        <label>Article_id</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="headline" value="<?= $article->headline; ?>">
        <label>Headline</label>
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
        </p>
        <p>
        <input class="w3-input" type="text" name="text" value="<?= $article->text; ?>" >
        <label>Article Text</label>
    </p>
            
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />

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