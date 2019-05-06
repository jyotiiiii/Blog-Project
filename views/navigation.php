<?php 
if(isset($_SESSION["username"]))
                { ?>
<div class="container">
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="?controller=article&action=readAll">Articles</a>
          <a class="p-2 text-muted" href="?controller=article&action=create">Add Article</a>
          <a class="p-2 text-muted" href="?controller=blogger&action=logout">Logout</a>
          
</nav>
          </div>
              </div>
<?php } else { ?>


   <div class="container">
       <div class="nav-scroller py-1 mb-2">
<nav class="nav d-flex justify-content-between">
          <a href="?controller=pages&action=responsibility"><img src="https://i.imgur.com/yAe0edI.png" title="BEE" height="30px" width="35px" /></a>
<!--          <a class="p-2 text-muted" href="?controller=product&action=readAll">Products</a>
          <a class="p-2 text-muted" href="?controller=product&action=create">Add Product</a>
          <a class="p-2 text-muted" href="?controller=article&action=readAll">Articles</a>
          <a class="p-2 text-muted" href="?controller=article&action=create">Add Article</a>-->
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
                            </div>
			</form>			
		</div>
	</div>
</div>
       </div>
        
          <!-- the two line below can now be deleted as we now have the login in the H of honeycomb-->
          <!-- <a class="p-2 text-muted" href="?controller=blogger&action=register">Register</a>
          <a class="p-2 text-muted" href="?controller=blogger&action=login">Login</a>-->
        </nav>
<?php }
?>
