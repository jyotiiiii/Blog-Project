<!DOCTYPE html>


<html>
<!--    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>contact us</title>
         Latest compiled and minified CSS 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         Optional theme 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="../../contactform/form.css" rel="stylesheet" type="text/css"/>
        <script src="../../contactform/form.js" type="text/javascript"></script>
    </head>-->
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      <div class="navbar-collapse collapse justify-content-between">
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
        
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="form_container">
                    <h2>Contact Us</h2> 
                    <p> Please send your message below. We will get back to you at the earliest! </p>
                    <form role="form" method="post" id="contact_form" action="https://formspree.io/honeycombbees1@gmail.com" autocomplete ="off">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="message"> Message:</label>
                                <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-default pull-right" href="pages/home.php">Send &rarr;</button>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>
    </body>
</html>
