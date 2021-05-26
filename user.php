<?php

class User {
    private $email;
    private $nom;
    private $age;

    public function __construct($email, $nom, $age)

    {
        $this->email = $email;
        $this->nom = $nom;
        $this->age = $age;
    }

    public function isEmailValid() : bool {
        if(filter_var($this->getEmail(), FILTER_VALIDATE_EMAIL)) {
            return true;
        }

        return false;
    }

    public function getEmail() {
        return $this->email;
    }
    public function getAge() {
        return $this->age;
    }
    public function getName() {
        return $this->nom;
    }
}