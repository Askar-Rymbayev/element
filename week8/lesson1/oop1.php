<?php

//require_once 'User.php';
require_once 'Child.php';

$child = new Child();
$child2 = new Child();
$child3 = new Child();
$child4 = new Child();

//echo Child::CONST1;
//var_dump($child::CONST1);

var_dump(Child::$table);

Child::$table = 'func 1';
var_dump(Child::$table);
var_dump($child2::$table);
var_dump($child3::$table);
var_dump($child4::$table);

$child2::$table = 'child 2';
var_dump(Child::$table);
var_dump($child2::$table);
var_dump($child3::$table);
var_dump($child4::$table);

$child3::$table = 'child 3';
var_dump(Child::$table);
var_dump($child2::$table);
var_dump($child3::$table);
var_dump($child4::$table);

$child4::$table = 'manual';
var_dump(Child::$table);
var_dump($child2::$table);
var_dump($child3::$table);
var_dump($child4::$table);

//$user = new User('askar001', '8i8i8i8i8i8', 'Askar', 'Rymbayev', 20);
//$user->child = new User('childAskar001', '6y6y6y6y6y', 'Alina', 'Rymbayev', 20);
//
//echo $user->getFirstName().'<br>';
//echo $user->child->getPassword() . '<br>';

//$user->password = '';

//$good = new Good('HP 15-HP001', 'HP', 500000, 'black');
//
//var_dump($user);
//var_dump($good);
//
//$user->firstName = '';
//$user->lastName = '';
//$user->age = '';
//$user->login = '';

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

//$userName = '';
//$userLogin = '';
//$userFIO = '';
//$userAge = 20;
//$userPassword = '';
//$userCountry = '';
//
//$user = [
//    'login' => '',
//    'password' => '',
//    'age' => 20,
//    'country' => '',
//    'isFamous' => true,
//];
//
//$users = [
//    $user,
//    $user,
//    $user
//];
//
//function showUser()
//{
//
//}
//
//function loginUser()
//{
//
//}
//
//function logoutUser()
//{
//
//}
//
//function showMenu()
//{
//
//}
//
//function showMenuItem()
//{
//
//}