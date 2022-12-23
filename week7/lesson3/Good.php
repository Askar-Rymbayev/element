<?php

class Good
{
    public $title;
    public $brand;
    public $price;
    public $color;

    public function __construct($title, $brand, $price, $color)
    {
        $this->title = $title;
        $this->brand = $brand;
        $this->price = $price;
        $this->color = $color;
    }

    public function insert()
    {

    }
}