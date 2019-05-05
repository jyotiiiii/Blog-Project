<?php

class PagesController {
   
    public function home() {
      //example data to use in the home page
     require_once('models/article.php');
     $headline_one= Article::headline(23);
     $headline_two=Article::headline(21);
     $headline_three=Article::headline(2);
     $headline_four=Article::headline(28);
     $headline_six=Article::headline(1);
     
     $blogger_one=Article::blogname(23);
     $blogger_two=Article::blogname(21);
     $blogger_three=Article::blogname(2);
     $blogger_four=Article::blogname(28);
     $blogger_six=Article::blogname(1);
         
    $description_one=Article::description(23);
    $description_two=Article::description(21);
    $description_three=Article::description(2);
    $description_four=Article::description(28);
    $description_six=Article::description(1);
//      $first_name = 'Lisa';
//      $last_name  = 'Simpson';
      require_once('views/pages/home.php');
    }
    
    public function error() {
      require_once('views/pages/error.php');
    }
    
    public function about() {
      require_once('views/pages/about.php');
    }
      public function responsibility() {
      require_once('views/pages/responsibility.php');
    }
    
     public function contact() {
      require_once('views/pages/contact.php');
    }
}

