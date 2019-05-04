<?php

class SubscriberController {
    
    public function signUp() {
        
         $user = Subscriber::signUp();
      
        require_once('models/subscriber.php');
        }
      
    }

