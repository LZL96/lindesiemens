<?php

class Operator {
    // property declaration
    public $id;
    public $operator;
    public $username;    
    public $password;
    
    public function __construct($username='', $gender='', $password='', $name='') {
        $this->username = $username;
        $this->gender = $gender;
        $this->password = $password;
        $this->name = $name;
    }
    
    public function authenticate($enteredPwd) {
        return password_verify ($enteredPwd, $this->password);
    }
}

?>