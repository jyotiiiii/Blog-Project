<head>
  
</head>
<!--<p>Article ID: <?php // echo $article->id; ?></p>-->
<p> <?php // echo $article->headline; ?></p>

<?php

$file ='views/images/' . $article->headline . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
<?php

//$output = "<script>alert('Your site sucks!');</script>";
//
//echo filter_var($user_input, FILTER_SANITIZE_STRIPPED);
//
//?>
<!--<p>Author: <?php// echo $article->first_name; ?> <?php //echo $article->first_name; ?> </p>-->
<!--<p>Tags: <?php //echo $article->tag_name; ?></p>-->
<p> <?php 
$cleaner_input = html_entity_decode($article->text);
echo $cleaner_input ?> </p>
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
	
</body>