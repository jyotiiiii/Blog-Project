<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- needed-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- needed-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!--<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>-->
<!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>-->
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="views/css/modal.css" rel="stylesheet" type="text/css"/>
<a href="../favicon.ico"></a>
<title>Honeycomb</title>
  </head>
  
  <body>
<!--This is our header-->
<div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center text-center">
          <div class="col-4 pt-1">
           <a href="?controller=pages&action=responsibility"><img src="https://i.imgur.com/yAe0edI.png" title="BEE" height="30px" width="35px" /></a>
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
          <!--<a href="?controller=pages&action=responsibility"><img src="https://i.imgur.com/yAe0edI.png" title="BEE" height="30px" width="35px" /></a>-->
          <a class="p-2 text-muted" href="?controller=pages&action=home">Home</a>
          <a class="p-2 text-muted" href="?controller=product&action=readAll">Products</a>
          <a class="p-2 text-muted" href="?controller=product&action=create">Add Product</a>
          <a class="p-2 text-muted" href="?controller=article&action=readAll">Articles</a>
          <a class="p-2 text-muted" href="?controller=article&action=create">Add Article</a>
          <a class="p-2 text-muted" href="#">Contact Us</a>
          <a class="p-2 text-muted" href="?controller=pages&action=about">About Us</a>
          <a class="p-2 text-muted" href="#myModal" data-toggle="modal" data-target="#myModal">Newsletter</a>
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-newsletter">
                    <div class="modal-content">
			<form action="index.php?controller=subscriber&action=signUp" method="post">
                            <div class="modal-header">
                                <div class="icon-box">						
                                    <!--<i class="fa fa-envelope-open-o"></i>-->
                                    <a href="https://imgur.com/yAe0edI"><img src="https://i.imgur.com/yAe0edI.png" height="150px" width="150px" title="source: imgur.com" /></a> 
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
                            </div>
				<div class="modal-body text-center">
					<h4>Subscribe to our weekly beesletter</h4>	
					<p>Look inside our hive to see what our honeybees are up to.</p>
					<div class="input-group">
                                            <input type="text" class="form-control" name="first_name" placeholder="First name" required>
                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                            <span class="input-group-btn">
						<input type="submit" class="btn btn-primary" value="Sign me up!">
                                            </span>
					</div>
				</div>
			</form>			
		</div>
	</div>
</div>
       
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

          <p class="text-muted"><br>©<?= date('Y'); ?><a href="?controller=blogger&action=login" style="text-decoration: none" style="color: black" class="text-muted"> H</a>oneycomb</p>
                  

          </div>
      </div>  
    </footer>

</div>
  
</html> 
