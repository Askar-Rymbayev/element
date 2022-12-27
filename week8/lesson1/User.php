<?php

class User
{
    public $login;
    private $password;
    protected $firstName;
    public $lastName;
    public $age;
    public $child;

    public function __construct($login, $pass, $fName, $lName, $age)
    {
        $this->login = $login;
        $this->password = $pass;
        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->age = $age;
    }

    public function getFirstName()
    {
        return ucfirst($this->firstName);
    }

    public function getPassword()
    {
        return md5($this->password);
    }

    public function setPassword()
    {

    }

    protected function logout()
    {
        $this->firstName = 'dfsdfsdf';
    }

    private function recoveryPassword()
    {

    }
}