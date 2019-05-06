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