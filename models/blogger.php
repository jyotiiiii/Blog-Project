<?php

class Blogger {
    private $blogger_id;
   
public function Blogger($blogger_id) {
    $this->blogger_id = $blogger_id;
}
public function get_blogger_id() {
    return $this->blogger_id;
}    
public function set_blogger_id($blogger_id) {
    $this->blogger_id = $blogger_id;
} 
        
};

