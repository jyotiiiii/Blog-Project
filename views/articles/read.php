

<!--<p>Article ID: <?php // echo $article->id; ?></p>-->
<p> <?php echo $article->headline; ?></p>

<?php 
$file = 'image.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
} 

?>

<!--<p>Author: <?php// echo $article->first_name; ?> <?php //echo $article->first_name; ?> </p>-->
<!--<p>Tags: <?php //echo $article->tag_name; ?></p>-->
<p><?php echo $article->text; ?></p>
<!--<p>Tags: <?php // echo $article->tag_name; ?></p>-->
<?php 

////Need to point to pinterest url or file location
//$file = 'views/images/' . $article->headline . '.jpeg';
//if(file_exists($file)){
//    $img = "<img src='$file' width='150' />";
//    echo $img;
//}
//else
//{
//echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
//}

?>
	
