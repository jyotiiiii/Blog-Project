
<h1> All Articles </h1>
<br>
<!--    <p>Here is a list of all articles:</p>-->

<?php foreach($articles as $article) { ?>
  <h3>
<!--  <ul>
-->      <strong> <?php echo $article->headline; ?> </strong></h3>
<p>   <?php 
   $clean_input = html_entity_decode($article->description); 
   echo $clean_input; ?> </p>
    
    <a href='?controller=article&action=read&id=<?php echo $article->id; ?>'>See article information</a> &nbsp; &nbsp;
    <a href='?controller=article&action=delete&id=<?php echo $article->id; ?>'>Delete Article</a> &nbsp; &nbsp;
    <a href='?controller=article&action=update&id=<?php echo $article->id; ?>'>Update Article</a> &nbsp;
  </ul>
  </p>
<?php } ?>