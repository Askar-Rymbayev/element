<?php

require_once 'Base.php';

class Child extends Base
{
    public const CONST1 = 1;
    private const CONST2 = 2;
    protected const CONST3 = 3;

    public static $table = 'user';

    private $priAttribute = 2222;

    public function getProtFunc()
    {
        echo self::CONST1;
        echo self::$table;

        return $this->protFunc();
    }

    public static function pubStatFunc()
    {

    }

    public function protFunc()
    {
        return $this->proAttribute;
    }

    public function getPrivateFunc()
    {
        echo __CLASS__.'<br>';
        echo __METHOD__.'<br>';
        return $this->privFunc();
    }

    private function privFunc()
    {
        return $this->priAttribute;
    }
}

class Child2 extends Child
{

}