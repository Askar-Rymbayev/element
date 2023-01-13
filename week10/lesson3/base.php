<?php

$integer = 1;
$float = 3.14;

$string = '1283498rfsoefkfdskf';

$booleanTrue = true;
$booleanFalse = false;

$null = null;

$array = [];

$arrayOfIntegers = [
    1, 2, 3, 45, 56, 43, 12
];

$function = function ($param)
{
    var_dump($param);
};

$function($arrayOfIntegers);

function kvadrat($integer)
{
    return $integer * $integer;
}

$result = array_map(
    function ($integer) {
        return $integer * $integer;
    },
    $arrayOfIntegers
);

pre($arrayOfIntegers);
pre($result);

function pre($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

$arrayOfCombinedValues = [
    1,
    2.394847573,
    true,
    false,
    [
        'sldkfjsldf',
        [
            34234, 34.34234, false, null
        ]
    ],
    'index' => 123.32424,
    'array' => [
        [], [], [], []
    ],
    'function' => function ()
    {

    }
];

//pre(true);
//pre(false);
//pre(null);
//pre(1234);
//pre(112.1212);
//pre('sdfsdfdlfkjsdf');
//pre(['sdfsdf']);
//
//pre($booleanTrue);