
   <div class="container">
       <div class="nav-scroller py-1 mb-2">
<nav class="nav d-flex justify-content-between">
  
<!--          <a class="p-2 text-muted" href="?controller=product&action=readAll">Products</a>
          <a class="p-2 text-muted" href="?controller=product&action=create">Add Product</a>
          <a class="p-2 text-muted" href="?controller=article&action=readAll">Articles</a>
          <a class="p-2 text-muted" href="?controller=article&action=create">Add Article</a>-->
          <a class="p-2 text-muted" href="?controller=pages&action=contact">Contact Us</a>
          <a class="p-2 text-muted" href="?controller=pages&action=about">About Us</a>
          <a class="p-2 text-muted" href="#myModal" data-toggle="modal" data-target="#myModal">Newsletter</a>
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
</div>
       </div>
        
          <!-- the two line below can now be deleted as we now have the login in the H of honeycomb-->
          <!-- <a class="p-2 text-muted" href="?controller=blogger&action=register">Register</a>
          <a class="p-2 text-muted" href="?controller=blogger&action=login">Login</a>-->
        </nav>

<!-- Blog Posts and Images-->

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-white text-center">
        <div class="col-md-12 px-0">
        <div class="social-icons clearfix"> 
               
<!--Inline javascript mouseover Najwa, Jyoti, Gabriella, Omolade, Mona, Niki-->  
<a href="?controller=article&action=BlogPage&blogger_id=5" id="fashion">
    <img title="Najwa" href="" src="https://i.imgur.com/5LVRHtR.png" onmouseover="this.src='https://i.imgur.com/QN3DDtC.png'" onmouseout="this.src='https://i.imgur.com/5LVRHtR.png'" height="173px" width="150px"/>
</a>
   
<a href="?controller=article&action=BlogPage&blogger_id=6" id="making">
    <img title="Jyoti" src="https://i.imgur.com/fyu827Z.png" onmouseover="this.src='https://i.imgur.com/tmOGObw.png'" onmouseout="this.src='https://i.imgur.com/fyu827Z.png'" height="173px" width="150px"/>
</a>

<a href="?controller=article&action=BlogPage&blogger_id=3" id="writing">
    <img title="Gabriella" src="https://i.imgur.com/vvySn6n.png" onmouseover="this.src='https://i.imgur.com/fkfMJmw.png'" onmouseout="this.src='https://i.imgur.com/vvySn6n.png'" height="173px" width="150px"/>
</a>

<a href="?controller=article&action=BlogPage&blogger_id=1" id="performance">
    <img title="Omolade" src="https://i.imgur.com/kYJ2Vbc.png" onmouseover="this.src='https://i.imgur.com/H00OCnK.png'" onmouseout="this.src='https://i.imgur.com/kYJ2Vbc.png'" height="173px" width="150px"/>
</a>

<a href="?controller=article&action=BlogPage&blogger_id=4" id="cooking">
<img title="Mona" src="https://i.imgur.com/NHrgDmV.png" onMouseOver="this.src='https://i.imgur.com/BlPMxCj.png';" onMouseOut="this.src='https://i.imgur.com/NHrgDmV.png';" height="173px" width="150px"/>
</a>
<a href="?controller=article&action=BlogPage&blogger_id=2" id="lifestyle">
    <img title="Niki" src="https://i.imgur.com/DziTvph.png" onmouseover="this.src='https://i.imgur.com/eFAolQa.png'" onmouseout="this.src='https://i.imgur.com/DziTvph.png'" height="173px" width="150px"/>
</a>

<!--<a href="?controller=article&action=BlogLifestyle&blogger_id=2" id="lifestyle">
    <img title="Niki" src="https://i.imgur.com/DziTvph.png" onmouseover="this.src='https://i.imgur.com/eFAolQa.png'" onmouseout="this.src='https://i.imgur.com/DziTvph.png'" height="173px" width="150px"/>
</a>      -->
        </div>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-370">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-black">Fashion</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="?controller=article&action=read&id=23"> <?php echo substr($headline_one,0,60); ?> </a>
              </h3>
              <div class="mb-1 text-muted"> By <?php echo $blogger_one; ?> </div>
              <p class="card-text mb-auto"> <?php 
              $clean_one=html_entity_decode($description_one);
             echo $clean_one; ?> </p>
              <a class="text-light bg-dark" href="?controller=article&action=read&id=23">VIEW BLOG</a>
            </div>
              <!--<img class="card-img-right flex-auto d-none d-lg-block" href="https://imgur.com/RSEiswj"><img src="https://i.imgur.com/RSEiswj.jpg" title="source: imgur.com" style="width: 370px; height: 370px;"/></a>-->
          <img class="card-img-right flex-auto d-none d-lg-block" href="https://imgur.com/RWhW18q"><img src="https://i.imgur.com/RWhW18q.png" title="source: imgur.com" style="width: 370px; height: 370px;"/></a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-370">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-black">Food</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="?controller=article&action=read&id=21">  <?php echo substr($headline_two,28,32); ?></a>
              </h3>
              <div class="mb-1 text-muted">By <?php echo $blogger_two; ?></div>
              <p class="card-text mb-auto"> <?php 
              $clean_two=html_entity_decode($description_two);
             echo $clean_two; ?></p>
              <a class="text-light bg-dark" href="?controller=article&action=read&id=21">VIEW BLOG</a>
            </div>
              <img class="card-img-right flex-auto d-none d-lg-block" href="https://imgur.com/y6xQD2v"><img src="https://i.imgur.com/cORpz75.png" title="source: imgur.com" style="width: 370px; height: 370px;" /></a>
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-370">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-black">Literature</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="?controller=article&action=read&id=2"><?php echo substr($headline_three,0,24); ?></a>
              </h3>
              <div class="mb-1 text-muted">By <?php echo $blogger_three; ?></div>
              <p class="card-text mb-auto"> <?php 
               $clean_three=html_entity_decode($description_three);
              echo $clean_three; ?></p>
              <a class="text-light bg-dark" href="?controller=article&action=read&id=2">VIEW BLOG</a>
            </div>
              <img class="card-img-right flex-auto d-none d-lg-block" href="https://imgur.com/jZLvAzs"><img src="https://i.imgur.com/jZLvAzs.png" title="source: imgur.com" style="width: 370px; height: 370px;"/></a>
            <!--<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16a785f03f1%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16a785f03f1%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">-->
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-370">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-black">Lifestyle</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="?controller=article&action=read&id=28"><?php echo substr($headline_four,0,22); ?></a>
              </h3>
              <div class="mb-1 text-muted"> By <?php echo $blogger_four; ?></div>
              <p class="card-text mb-auto"> <?php  
             $clean_four=html_entity_decode($description_four);
             echo $clean_four; ?></p>
              <a class="text-light bg-dark" href="?controller=article&action=read&id=28">VIEW BLOG</a>
            </div>
              <img class="card-img-right flex-auto d-none d-lg-block" href="https://imgur.com/hZE2qNU"><img src="https://i.imgur.com/hZE2qNU.png" title="source: imgur.com" style="width: 370px; height: 370px;"/></a>
            <!--<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16a785f03f7%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16a785f03f7%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 250px;">-->
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-370">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-black">Making</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Date</div>
              <p class="card-text mb-auto"> This is where the leading goes</p>
              <a class="text-light bg-dark" href="#">VIEW BLOG</a>
            </div>
              <img class="card-img-right flex-auto d-none d-lg-block" href="https://imgur.com/UB0tyPn"><img src="https://i.imgur.com/UB0tyPn.png" title="source: imgur.com" style="width: 370px; height: 370px;"/></a>
            <!--<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16a785f03f1%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16a785f03f1%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">-->
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-370">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-black">Performance</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="?controller=article&action=read&id=1"><?php echo substr($headline_six,8,15); ?></a>
              </h3>
              <div class="mb-1 text-muted">By <?php echo $blogger_six; ?></div>
              <p class="card-text mb-auto"> <?php 
              $clean_six=html_entity_decode($description_six);
              echo $clean_six;
//              echo substr($clean_six,70,90); ?></p>
              <a class="text-light bg-dark" href="?controller=article&action=read&id=1">VIEW BLOG</a>
            </div>
           
             
                <img class="card-img-right flex-auto d-none d-lg-block" href="https://imgur.com/MY4rA4P"><img src="https://i.imgur.com/MY4rA4P.png" title="source: imgur.com" style="width: 370px; height: 370px;"/></a>
  <!--<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16a785f03f1%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16a785f03f1%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">-->
                    
</div>
        </div>
      </div>
    </div>
</div>

