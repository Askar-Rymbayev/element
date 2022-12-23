<?php

require_once 'User.php';
require_once 'Good.php';

$user = new User('askar001', '234w34w3r', 'Askar', 'Rymbayev', 20);
$user->child = new User('childAskar001', '234w34w3r', 'Alina', 'Rymbayev', 20);

$good = new Good('HP 15-HP001', 'HP', 500000, 'black');

var_dump($user);
var_dump($good);

$user->firstName = '';
$user->lastName = '';
$user->age = '';
$user->login = '';

/*
пользователь
    имя
    логин/пароль

подписки
    подписчики
пост
    контент
    лайки
комменты
---------------
integer
float
boolean
array
string

object
---------------

*/

$userName = '';
$userLogin = '';
$userFIO = '';
$userAge = 20;
$userPassword = '';
$userCountry = '';

$user = [
    'login' => '',
    'password' => '',
    'age' => 20,
    'country' => '',
    'isFamous' => true,
];

$users = [
    $user,
    $user,
    $user
];

function showUser()
{

}

function loginUser()
{

}

function logoutUser()
{

}

function showMenu()
{

}

function showMenuItem()
{

}