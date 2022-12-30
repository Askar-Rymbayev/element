<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers.php';

class Anymal
{
    public string $voice;
    public string $jumpHeight;
    protected string $eatSetting;

    public function doSound()
    {
        pre($this->voice);
    }

    public function jump()
    {
        pre($this->jumpHeight);
    }

    public function eat()
    {
        pre('eat: ' . $this->eatSetting);
    }

    protected function set($setting)
    {
        $setting = ucwords($setting);
        $setting = $setting . ' - setting';
        $this->eatSetting = $setting;
    }

    public function run()
    {
        $runSetting = $this->getRunSetting();
        pre($runSetting);
    }

    private function getRunSetting()
    {
        return 'anymal private run: ' . get_class($this);
    }
}

class Dog extends Anymal
{
    public function __construct()
    {
        $this->voice = 'ГАВ';
        $this->set('dog');
    }

    protected function set($setting)
    {
        $setting = $setting . ' - my dog';
        $setting = $setting . ' - puppy';
        // dog - my dog - puppy
        parent::set($setting);
    }

    public function run()
    {
        $runSetting = $this->getRunSetting();
        pre($runSetting);
    }
}

class Cat extends Anymal
{
    public function __construct()
    {
        $this->voice = 'МЯУ';
        $this->set('cat');
    }

    public function jump()
    {
        pre('run');
        parent::jump();
    }
}

$dog = new Dog();
$dog->doSound();
$dog->eat();
$dog->run();
hr();
$cat = new Cat();
$cat->doSound();
$cat->eat();