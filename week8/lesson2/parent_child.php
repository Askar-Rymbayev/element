<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers.php';

class Anymal
{
    public string $voice;
    public string $jumpHeight;

    public function doSound()
    {
        pre($this->voice);
    }

    public function jump()
    {
        pre($this->jumpHeight);
    }
}

class Dog extends Anymal
{
    public function __construct()
    {
        $this->voice = 'ГАВ';
    }
}

class Cat extends Anymal
{
    public function __construct()
    {
        $this->voice = 'МЯУ';
    }

    public function jump()
    {
        pre('run');
        parent::jump();
    }
}

$dog = new Dog();
$dog->doSound();
$cat = new Cat();
$cat->doSound();