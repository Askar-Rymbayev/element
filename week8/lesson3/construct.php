<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers.php';

class ParentClass2
{
    function __construct()
    {
        pre("Конструктор класса ParentClass");
    }
}

$parentObject = new ParentClass2;
hr();

//-----------

class ChildClass extends ParentClass2
{
    function __construct()
    {
        parent::__construct();
        pre("Конструктор класса ChildClass");
    }
}

$childObject = new ChildClass;
hr();

//-----------

class NextChildClass extends ParentClass2
{
    // автоматом наследует конструктор ParentClass2
}

$nextChildObject = new NextChildClass;