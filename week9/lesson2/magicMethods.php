<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers.php';

class ModelClass
{
    private array $data = [];

    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    public function __get(string $name)
    {
        if (key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        pre('нет такого свойства в классе');
    }

    public function __isset(string $name): bool
    {
        pre(__METHOD__);
        return key_exists($name, $this->data);
    }

    public function __unset(string $name): void
    {
        pre(__METHOD__);
        unset($this->data[$name]);
    }
}

$obj = new ModelClass();

$obj->firstName = 'Askar';
$obj->lastName = 'Rymbayev';

pre($obj->firstName);
pre($obj->lastName);
pre($obj->fullName);

pre(isset($obj->firstName));
unset($obj->firstName);

