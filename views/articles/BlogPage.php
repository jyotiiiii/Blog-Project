<nav class="navbar navbar-expand-lg navbar-light bg-white">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">


      <li class="nav-item">
        <a class="nav-link" href="?controller=pages&action=contact">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=pages&action=about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#myModal" data-toggle="modal" data-target="#myModal">Newsletter</a>
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-newsletter">
                    <div class="modal-content">
			<form action="index.php?controller=subscriber&action=signUp" method="post">
                            <div class="modal-header">
                                <div class="icon-box">						
                                    <!--<i class="fa fa-envelope-open-o"></i>-->
                                    <a href="https://i.imgur.com/o1OFTqx.jpg"><img src="https://i.imgur.com/o1OFTqx.jpg" height="400px" width="400px" title="source: imgur.com" /></a> 
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
      </li>
      </ul>
</div>
</nav>
    
    <?php foreach ($articles as $article) {  ?> 
<div class="container" class="text-center"
<div style="text-align: center;"
      <div class="row mb-6">
 <!--<div class="col-md-6">-->
          <!--<div class="card flex-md-row mb-4 shadow-sm h-md-370">-->
            <div class="card-body d-flex flex-column align-items-centre">
              <strong class="d-inline-block mb-2 text-black">
                  <?php
                switch ($_GET['blogger_id']) {
                    case $_GET['blogger_id']= 1:
                      Echo "Perfomance";
                      break;
                  case $_GET['blogger_id']=2:
                      Echo "Lifestyle";
                      break; 
                  case $_GET['blogger_id']=3:
                      Echo "Literature";
                      break; 
                  case $_GET['blogger_id']=4:
                      Echo "Food";
                      break; 
                  case $_GET['blogger_id']=5:
                      Echo "Fashion";
                      break; 
                  case $_GET['blogger_id']=6:
                      Echo "Printing";
                      break; 
                    Default: header("location:error.php");
                }                 
                
                  ?>
                  </strong>
              <h3 class="mb-0">
                <a class="text-dark" ><?php echo $article->headline; ?> </a>
              </h3>
                
                &nbsp;
              <div class="mb-1 text-muted">
                  
            <?php
                  
                switch ($_GET['blogger_id']) {
                    case $_GET['blogger_id']= 1:
                      Echo "By Omolade";
                      break;
                  case $_GET['blogger_id']=2:
                      Echo "By Niki";
                      break; 
                  case $_GET['blogger_id']=3:
                      Echo "By Gabby";
                      break; 
                  case $_GET['blogger_id']=4:
                      Echo "By Mona";
                      break; 
                  case $_GET['blogger_id']=5:
                      Echo "By Najwa";
                      break; 
                  case $_GET['blogger_id']=6:
                      Echo "By Jyoti";
                      break; 
                    Default: header("location:error.php");
                }                 
                
                  ?>
              
              </div>
                
                &nbsp;
                
              <p class="card-text mb-auto"><?php 
              $clean_input=html_entity_decode($article->description);             
              echo $clean_input; ?></p>
              <a class="text-light bg-dark" href="?controller=article&action=read&id=<?php echo $article->id;?>">VIEW BLOG</a>
            </div>
              <img class="card-img-right flex-auto d-none d-lg-block"><img src="views/images/pencils.png" title="general" style="width: 370px; height: 370px;"/></a>
          </div>
          </div>
        </div>
</div>
<?php } ?>