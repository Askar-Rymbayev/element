<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers.php';

function autoloader($class)
{
//    pre($class);
//    pre(strtr($class, '_\\', '//'));
//    pre($_SERVER['DOCUMENT_ROOT'] . '/' . strtr($class, '_\\', '//') . '.php');
    /*
    _\-
    //=

    "_" -> "/"
    "\" -> "/"
    "-" -> "="
    */
    require($_SERVER['DOCUMENT_ROOT'] . '/' . strtr($class, '_\\', '//') . '.php');
}

spl_autoload_register('autoloader');