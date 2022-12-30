<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

use week8_lesson3\ClassForAutoload1;
use week8_lesson3\ClassForAutoload2;

//require_once $_SERVER['DOCUMENT_ROOT'] . 'week8/lesson3/ClassForAutoload1.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . 'week8/lesson3/ClassForAutoload2.php';


$object1 = new ClassForAutoload1();
$object1->test();


$object2 = new ClassForAutoload2();
$object2->test();