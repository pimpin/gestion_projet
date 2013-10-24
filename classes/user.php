<?php

class User{ 

    private $login;
    private $pass;
    private $rights;
    
    function __construct($name, $login, $pass, $right="user") {
        $this->login = $login;
        $this->pass = $pass;
        $this->right = $right;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getLogin() {
        return $this->login;
    }

    public function getPass() {
        return $this->pass;
    }

    public function getRight() {
        return $this->right;
    }

    public function setLogin($login) {
        $this->login = $login;
        return $this;
    }

    public function setPass($pass) {
        $this->pass = $pass;
        return $this;
    }

    public function setRight($right) {
        $this->right = $right;
        return $this;
    }
}
?>
