<?php
/*
интернет магазин
какие-то товары добавлены в корзину

нужно применить скидку к корзине товаров

есть пользователь, с параметрами:
- возраст
- покупка в интернет магазине. покупал или впервые покупает
- итоговая стоимость товаров в корзине. менее 40 000 тг или более
*/

$user = [
    'age' => mt_rand(18, 80),
    'isFirstOrder' => mt_rand(0,1),
    'cartTotalAmount' => mt_rand(35000, 45000)
];

echo '<pre>';
print_r($user);
echo '</pre>';

$discounts = [];

// если пенсионер (возраст более 63), то скидка 8%
if ($user['age'] >= 63) {
    $discounts[] = [
        'type' => 'percent',
        'value' => 8,
    ];
}

// если покупает впервые, итоговая сумма более 3000, то скидка 2000 тг
if ($user['isFirstOrder'] && $user['cartTotalAmount'] >= 3000) {
    $discounts[] = [
        'type' => 'money',
        'value' => 2000,
    ];
}

// если итоговая стоимость товаров более 40 000 тг, то скидка 5000 тг
if ($user['cartTotalAmount'] >= 40000) {
    $discounts[] = [
        'type' => 'money',
        'value' => 5000,
    ];
}

echo '<pre>';
print_r($discounts);
echo '</pre>';

$cartTotalAmount = $user['cartTotalAmount'];

foreach ($discounts as $discount) {
    switch ($discount['type']) {
        case 'percent':
            echo '<pre>percent<br>';
            print_r($cartTotalAmount);
            echo '</pre>';
            $cartTotalAmount = $cartTotalAmount - ($cartTotalAmount * ($discount['value'] / 100));
            echo '<pre>';
            print_r($cartTotalAmount);
            echo '</pre>';
            break;
        case 'money':
            echo '<pre>money<br>';
            print_r($cartTotalAmount);
            echo '</pre>';
            $cartTotalAmount -= $discount['value'];
            echo '<pre>';
            print_r($cartTotalAmount);
            echo '</pre>';
            break;
    }
}

echo "<p>cart total amount: $cartTotalAmount tg</p>";