<!DOCTYPE html>

<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="HomePageStyles.css" rel="stylesheet" type="text/css"/>
    
    
</head>

<body>

    <header class="header">

	<div class="header-limit">

		<h1><a href="#">HoneyComb<span>Bees</span></a></h1>
        </div>
        
        <div id="menu-outer">
		<div class="table">
			<ul id="horizontal-list">
                            <li><a href="#">Recipes</a></li> 
                            <li><a href="#">Fashion & Travel</a></li>
                            <li><a href="#">Literature</a></li>
                            <li><a href="#">Theatre</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Printing & DIY</a></li>
                            <li><a href="#">Subscribe</a></li>

                        </ul>
                </div>
            
        </div>    

    </header>
    
    
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        
<!--    BODY OF THE PAGE-->

        <div id="btnContainer">
            <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
            <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
        </div>

        <link href="../Blog-Project/views/HomePageStyles.css" rel="stylesheet" type="text/css"/>
        <br>

        <div class="row">
            <div class="column" style="background-color:#FFFF;">
                <img src="images/frames.jpeg" height="200" width="300" alt=""/>
                <a href='?controller=article&action=read'>
                <h2>Headline</h2></a>
                <p><a href='?controller=article&action=read'>text</a></p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
            </div>
            
            <div class="column" style="background-color:#FFFF;">
                <img src="images/frames.jpeg" height="200" width="300" alt=""/>
                <a href='?controller=article&action=read'>
                <h2>Headline</h2></a>
                <p><a href='?controller=article&action=read'>text</a></p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
            </div>
            
            <div class="column" style="background-color:#FFFF;">
                <img src="images/frames.jpeg" height="200" width="300" alt=""/>
                <a href='?controller=article&action=read'>
                <h2>Headline</h2></a>
                <p><a href='?controller=article&action=read'>text</a></p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
            </div>
        </div>    

        <div class="row">
            <div class="column" style="background-color:#FFFF;">
                <img src="images/frames.jpeg" height="200" width="300" alt=""/>
                <a href='?controller=article&action=read'>
                <h2>Headline</h2></a>
                <p><a href='?controller=article&action=read'>text</a></p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
            </div>
            
            <div class="column" style="background-color:#FFFF;">
                <img src="images/frames.jpeg" height="200" width="300" alt=""/>
                <a href='?controller=article&action=read'>
                <h2>Headline</h2></a>
                <p><a href='?controller=article&action=read'>text</a></p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
            </div>
            
            <div class="column" style="background-color:#FFFF;">
                <img src="images/frames.jpeg" height="200" width="300" alt=""/>
                <a href='?controller=article&action=read'>
                <h2>Headline</h2></a>
                <p><a href='?controller=article&action=read'>text</a></p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
            </div>
        </div>    

<script src="HomePageScript.js" type="text/javascript"></script>
<div>
    <?php require_once('routes.php'); ?>
</div>


<!----footer            -->
            
        <div class="content"></div>

            <footer id="myFooter">
                <div class="container">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Comment</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Vlog</a></li>
                    </ul>
                <p class="footer-copyright">© 2019 Copyright Honeycomb Bees Team</p>
                </div>

                <div class="footer-social">
                    <a href="#" class="social-icons"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social-icons"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="social-icons"><i class="fa fa-twitter"></i></a>
                </div>

            </footer>

</body>
</html>
