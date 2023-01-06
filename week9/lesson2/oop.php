<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers.php';

const CONSTANT_NAME = 'sdf';

class BaseClass
{
    const CONST_NAME = '123';
    protected const PROT_CONST = 111;
    private const PRIV_CONST = 222;

    function func1()
    {
        pre(self::CONST_NAME);
        pre(self::PROT_CONST);
        pre(self::PRIV_CONST);
    }
}

$obj = new BaseClass();
$obj->func1();
//pre($obj::CONST_NAME);
//pre(BaseClass::CONST_NAME);

class ChildClass extends BaseClass
{
    const CONST_NAME = '123';
    protected const PROT_CONST = 111;
    private const PRIV_CONST = 222;

    function func1()
    {
        pre(self::CONST_NAME);
        pre(self::PROT_CONST);
        pre(self::PRIV_CONST);
    }
}

$obj2 = new ChildClass();
$obj2->func1();