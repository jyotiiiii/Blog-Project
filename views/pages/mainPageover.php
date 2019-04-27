<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="mainPageoverstyles.css" rel="stylesheet" type="text/css"/>

</head>
<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
     
    <a href="hopefullyFinalAboutUsPage.php">About Us</a>
    <a href="../../index.php">Index</a>
    <a href="HomePage.php">Home Page</a>
    <a href="contact.php">Contact Us</a>
   
  </div>
</div>
    

<h2>HoneyComb Bees</h2>
<p>Beautiful Blog by Busy Bees!!!</p>
<p> Do we all like it girls???</p>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
     
</body>
</html>
