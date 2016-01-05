<?php
    
class Users {

    public $username = '';
    
    function __construct($username) {
        $this->username = $username;
    }
    
    private function insert() {
        echo $this->username." will be inserted";
    }
    
    function delete() {
        echo $this->username." will be deleted";
    }
    
    function get_address() {
        
    }

}

class Php_Users extends Users {
    
    public function child_insert() {
        $this->insert();
    }
}

$prince = new Php_Users('prince');
//var_dump($prince); die;
$prince->child_insert();



