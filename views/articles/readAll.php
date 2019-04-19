<p>Here is a list of all articles:</p>

<?php foreach($articles as $article) { ?>
  <p>
    <?php echo $article->headline; ?> &nbsp; &nbsp;
    <a href='?controller=article&action=read&id=<?php echo $article->article_id; ?>'>See article information</a> &nbsp; &nbsp;
    <a href='?controller=article&action=delete&id=<?php echo $article->article_id; ?>'>Delete Article</a> &nbsp; &nbsp;
    <a href='?controller=article&action=update&id=<?php echo $article->article_id; ?>'>Update Article</a> &nbsp;
  </p>
<?php } ?>