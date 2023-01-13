<?php

class BaseClass
{
    public $integer;
    public $float;
    public bool $booleanTrue;
    public bool $booleanFalse = false;
    public $string;
    public $array;
    public SecondClass $secondObj;

    public function __construct($integer, $float, $true, $false, $string, $array, SecondClass $secondNewObject)
    {
        $this->integer = $integer;
        $this->float = $float;
        $this->booleanTrue = $true;
        $this->booleanFalse = $false;
        $this->string = $string;
        $this->array = $array;
        $this->secondObj = $secondNewObject;
    }

    public function func1($param1, $param2)
    {
        var_dump($param1);
        var_dump($param2);

        var_dump($this->array);
        var_dump($this->booleanFalse);
        var_dump($this->booleanTrue);

        $this->func2('sdfsdf', 'sdfsdf');
    }

    public function func2($param1, $param2)
    {

    }

    public function __toString(): string
    {
        return 'int: '.$this->integer .';<br>float: ' . $this->float;
    }
}

class SecondClass
{
    public $int = 0;
}

$secondObj = new SecondClass();
$secondObj2 = new SecondClass();

$integer = 123;
$float = 123.34234;
$string = 'sdfsdflksdjflskdjf';
$true = 1;
$false = 0;

$baseObject = new BaseClass($integer, $float, $true, $false, $string, [1,2,3,34,4,5,5], $secondObj);
$baseObject2 = new BaseClass($integer, $float, $true, $false, $string, [1,2,3,34,4,5,5], $secondObj2);

//echo '<pre>';
//var_dump($baseObject);
//echo '<br>';
//var_dump($baseObject->secondObj);
//echo '<br>';
//var_dump($secondObj);
//echo '<br>';
//var_dump($baseObject2);
//echo '<br>';
//var_dump($baseObject2->secondObj);
//echo '<br>';
//var_dump($secondObj2);
//echo '</pre>';

echo $baseObject;