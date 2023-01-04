<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers.php';

// 1. Написать функцию, внутри сделать вывод даты

function showDate()
{
    // echo, print, print_r, var_dump, pre (Helpers.php)
    pre(date('d.m.Y H:i:s'));
}

showDate();

//--------------------------------------------

// 2. Написать функцию с одним параметром.
// Параметр - это шаблон для функции date (первый параметр).
// Внутри функции сделать вывод даты, вставив в функцию date тот параметр, который отправили в функцию.

function showDateWithParam($format)
{
    pre(date($format));
}

showDateWithParam('Y/m/d H:i:s');

//--------------------------------------------

// 3. Написать функцию, с 1 параметром.
// Параметр - это любое число (int).
// Внутри функции сделать проверку на то, что число чётное.
// Если оно чётное вернуть true, если не чётное, то вернуть false

function isEven($number)
{
    return $number % 2 == 0;

//    if ($number % 2 == 0) {
//        return 'yes even';
//    } else {
//        return 'no not even, is odd';
//    }
}

pre(isEven(11));
pre(isEven(20));

// Короткое написание условного оператора
//    echo ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));
//    $score = 10;
//    $age = 10;
//    if ($score > 10) {
//        if ($age > 10) {
//            echo 'Average';
//        } else {
//            echo 'Exceptional';
//        }
//    } else {
//        if ($age > 10) {
//            echo 'Horrible';
//        } else {
//            echo 'Average';
//        }
//    }

//--------------------------------------------

// 4. Написать функцию, в которую передаётся параметр "возраст".
// Внутри функции сделать проверку возраста, если возраст 18 и больше,
// то вывести "вы взрослый, можете голосовать", если меньше 18,
// то вывести "чтобы можно было голосовать осталось {18 - $age} года (лет)"

function isAdult($age)
{
    if ($age >= 18) {
        pre('вы взрослый, можете голосовать');
    } else {
        pre("чтобы можно было голосовать осталось " . (18 - $age) . " года (лет)");
    }
}

isAdult(17);
isAdult(20);

//--------------------------------------------

// 5. Написать функцию, в которую можно передать много параметров
// function test(...$intValues)
// Внутри функции опеределить максимальное число из всех переданных параметров

function myMax(...$intValues)
{
    $maxInt = $intValues[0];
    for ($i=1; $i<count($intValues); $i++) {
        if ($maxInt < $intValues[$i]) {
            $maxInt = $intValues[$i];
        }
    }
    return $maxInt;
}

pre(myMax(1,2,3,4,5,6,7,87,9,6,34,34,234,456,345));
pre(max(1,2,3,4,5,6,7,87,9,6,34,34,234,456,345));