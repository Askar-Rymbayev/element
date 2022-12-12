<?php

require_once 'marketplace.php';

session_start();

$cities = [
    'Алматы',
    'Астана',
    'Актау',
    'Атырау',
    'Талдыкорган',
];

$cartProducts = $_POST['products'] ?? [];

$sum = 0;
foreach ($cartProducts as $productId => $count) {
    if (is_numeric($count) && $count >= 0) {
        $_SESSION['cart'][$productId]['count'] = $count;
    }
}
$sum = 0;
foreach ($_SESSION['cart'] as $productId => $row) {
    $sum += $products[$productId]['price'] * $row['count'];
}

$email = $_POST['email'] ?? '';
$city = $_POST['city'] ?? '';
$address = $_POST['address'] ?? '';
$phone = $_POST['phone'] ?? '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    header("Location: http://mysite.loc/week6/lesson1/cart.php?emailErr=$emailErr");
    exit;
}

if (array_search(mb_convert_case($city, MB_CASE_TITLE), $cities) === false) {
    $cityErr = "Invalid city";
    header("Location: http://mysite.loc/week6/lesson1/cart.php?cityErr=$cityErr");
    exit;
}