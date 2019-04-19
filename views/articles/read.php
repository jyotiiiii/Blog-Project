<p>This is the requested article:</p>


<p>Headline: <?php echo $article->headline; ?></p>
<p>Author: <?php echo $article->first_name; ?> <?php echo $article->first_name; ?> </p>
<p><?php echo $article->text; ?></p>
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
	
