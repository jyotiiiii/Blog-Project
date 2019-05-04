<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="css/clean-blog.css" rel="stylesheet" type="text/css"/>
  <a href="../favicon.ico"></a>
<title>Honeycomb</title>
  </head>
  
  <body>
<!--This is our header-->
<div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center text-center">
          <div class="col-4 pt-1">
           <!-- <a class="text-muted" href="#">Subscribe</a>-->
          </div>
          <div class="col-4 text-center">
              <a class="blog-header-logo display-3 text-dark" href="index.php" style="text-decoration: none">Honeycomb</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
          </div>
        </div>
      </header>

      <!-- Navigation-->
<div class="container">
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a href="?controller=pages&action=responsibility"><img src="https://i.imgur.com/yAe0edI.png" title="BEE" height="30px" width="35px" /></a>
          <a class="p-2 text-muted" href="index.php">Home</a>
          <a class="p-2 text-muted" href="?controller=product&action=readAll">Products</a>
          <a class="p-2 text-muted" href="?controller=product&action=create">Add Product</a>
          <a class="p-2 text-muted" href="?controller=article&action=readAll">Articles</a>
          <a class="p-2 text-muted" href="?controller=article&action=create">Add Article</a>
          <a class="p-2 text-muted" href="#">Contact Us</a>
          <a class="p-2 text-muted" href="?controller=pages&action=about">About Us</a>
        
          <!-- the two line below can now be deleted as we now have the login in the H of honeycomb-->
          <!-- <a class="p-2 text-muted" href="?controller=blogger&action=register">Register</a>
          <a class="p-2 text-muted" href="?controller=blogger&action=login">Login</a>-->
        </nav>
      </div>
</div>
      
      
      
      
<div class="">
    <?php require_once('routes.php'); ?>
</div>

    </body>
    
    <footer>
      
      <div style="text-align:center" class="footer-main bg-light py-5 small" class="container">

        <div class="social-icons clearfix"> 
             
          <a class="social-icon-youtube"><a href="https://www.youtube.com/channel/UCVLlebmzAKL8tWlmMPDj-Dg?view_as=subscriber" title="Subscribe to our channel on YouTube" target="_blank"><img src="https://i.imgur.com/DIWfuNh.png" title="source: imgur.com" alt="YouTube" height="100px" width="87px"></a>
                  
                  
          <a class="social-icon-instagram"><a href="https://www.instagram.com/honeycombbees1/" title="Follow us on Instagram" target="_blank"><img src="https://i.imgur.com/GSAbeBQ.png" title="source: imgur.com" alt="Instagram"height="100px" width="87px"></a>
                  
                  
          <a class="social-icon-pinterest"><a href="https://www.pinterest.co.uk/honeycombbees/" title="Take a look at our lastest pins" target="_blank"><img src="https://i.imgur.com/dJwcBpQ.png" title="source: imgur.com" alt="Pinterest"height="100px" width="87px"></a>
                  
                  
          <a class="social-icon-github"><a href="https://github.com/jyotiiiii/Blog-Project" title="Take a look at our code" target="_blank"><img src="https://i.imgur.com/GvE3sbj.png" title="source: imgur.com" alt="GitHub"height="100px" width="87px"></a>
                  
                  
          <a class="social-icon-twitter"><a href="https://twitter.com/BeesHoneycomb" title="Follow us on Twitter" target="_blank"><img src="https://i.imgur.com/u7Ptk9j.png" title="source: imgur.com" alt="Twitter"height="100px" width="87px"></a>
                  
                  
          <a class="social-icon-facebook"><a href="https://www.facebook.com/honeycomb.bees.35" title="Like us on Facebook" target="_blank"><img src="https://i.imgur.com/io0P9Q0.png" title="source: imgur.com" alt="facebook" height="100px" width="87px"></a>

                  </div>
          <div class="" style="color-muted">
              <p><br>©<?= date('Y'); ?><a href="?controller=blogger&action=login" style="text-decoration: none"> H</a>oneycomb</p>
                  

      </div>
    </footer>

</div>
  
</html> 
