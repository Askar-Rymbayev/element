<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers.php';

class SomeClass
{
    public string $someAttribute = "someAttribute";
    protected string $someAttribute2 = "someAttribute2";
    private string $someAttribute3 = "someAttribute3";

    public function __construct($newValue)
    {
        $this->someAttribute = $newValue;
        $this->someAttribute2 = 'sdfsdf';
        $this->someAttribute3 = 'sdfssdfsdfsdfsdf';
    }

    public function someFunc()
    {
        // Доступ к свойствам и методам класса, объявленным как public (общедоступный), разрешён отовсюду
        pre("Вызов метода " . __FILE__ . ':' . __LINE__ . ', ' .__METHOD__ . " класса " . __CLASS__);
        pre("Атрибут класса: $this->someAttribute");

        $this->protectedFunc();
        $this->privateFunc();
    }

    protected function protectedFunc()
    {
        // Модификатор protected (защищённый) разрешает доступ самому классу,
        // наследующим его классам и родительским классам.
        pre($this);

        // $this - значение вызывающего объект.
        // В данном случае это - $someObject или $someObject2
        $this->privateFunc();
    }

    private function privateFunc()
    {
        // Модификатор private (закрытый) ограничивает область видимости так,
        // что только класс, где объявлен сам элемент, имеет к нему доступ.
        $this->someAttribute3 = 'sdfssdfsdfsdfsdf';
        $this->someAttribute = 'sdfklsdjfhskdjf';
    }
}

$someObject = new SomeClass('new value');
$someObject2 = new SomeClass('new value 2');

$someObject->someFunc();
pre($someObject);
hr();
$someObject2->someFunc();
pre($someObject2);

//pre(get_class($someObject));
