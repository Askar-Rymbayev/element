<?php

class User
{
    public $login;
    public $password;
    public $firstName;
    public $lastName;
    public $age;
    public User $child;

    public function __construct($login, $pass, $fName, $lName, $age)
    {
        $this->login = $login;
        $this->password = $pass;
        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->age = $age;
    }

    public function login()
    {

    }

    public function logout()
    {

    }

    public function recoveryPassword()
    {

    }
}