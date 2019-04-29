<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Pangolin" >-->
<!-- Custom fonts-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="css/clean-blog.css" rel="stylesheet" type="text/css"/>
  <a href="../favicon.ico"></a>
<title>Honeycomb</title>
  </head>
  <body>
        <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <!--<a class="navbar-brand" href="index.html">Start Bootstrap</a>-->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?controller=article&action=readAll">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?controller=product&action=readAll">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?controller=product&action=create">Add Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?controller=article&action=create">Add Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?controller=pages&action=about">About Us</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="?controller=blogger&action=login">Login</a>
          
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?controller=blogger&action=register">Register</a>
          
          </li>
        </ul>
      </div>
    </div>
  </nav>
      
<div class="w3-container w3-pink">
    <?php require_once('routes.php'); ?>
</<div>
<div class="w3-container w3-gray">
    <footer >
        Copyright &COPY; <?= date('Y'); ?>
    </footer>
</div>
  </body>
</html>