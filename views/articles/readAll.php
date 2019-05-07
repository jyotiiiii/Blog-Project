<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      <div class="navbar-collapse collapse justify-content-between">
     <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="?controller=article&action=readAll">Articles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=article&action=create">Add Article</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=blogger&action=logout">Logout</a>
      </li>

      </ul>
</div>
</nav>
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