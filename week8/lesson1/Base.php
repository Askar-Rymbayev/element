<?php

class Base
{
    public $pubAttribute = 1;
    private $priAttribute = 2;
    protected $proAttribute = 3;

    public function pubFunc()
    {
        return $this->pubAttribute;
    }

    protected function protFunc()
    {
        return $this->proAttribute;
    }

    private function privFunc()
    {
        return $this->priAttribute;
    }
}