<?php

$array = [
    'русские буквы',
    'value 2',
    'value 3',
    'key' => [
        'new val',
        'new val',
        'new val',
        'new val',
        'new val',
    ]
];

$json = json_encode($array);

//echo $json.'<br>';

$data = json_decode($json, true);

//var_dump($data);

//------------------------------

$json = '{"0":["value 1","sdfsdfsd", "sadfsdfsdf"]}';

$data = json_decode($json);

print_r(json_last_error());

switch (json_last_error()) {
    case JSON_ERROR_NONE:
        echo 'Ошибок нет';
        break;
    case JSON_ERROR_DEPTH:
        echo 'Достигнута максимальная глубина стека';
        break;
    case JSON_ERROR_STATE_MISMATCH:
        echo 'Некорректные разряды или несоответствие режимов';
        break;
    case JSON_ERROR_CTRL_CHAR:
        echo 'Некорректный управляющий символ';
        break;
    case JSON_ERROR_SYNTAX:
        echo 'Синтаксическая ошибка, некорректный JSON';
        break;
    case JSON_ERROR_UTF8:
        echo 'Некорректные символы UTF-8, возможно неверно закодирован';
        break;
    default:
        echo 'Неизвестная ошибка';
        break;
}

var_dump($data);

