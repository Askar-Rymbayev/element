<?php
/*
products
id      name        price       unit
1       snickers    200         piece
2       coca-cola   300         piece
3       doshirak    400         piece
4       gorilla     350         piece
5       potatos     200         kg

users
id      login       password
1       askar       12345

orders
id      user_id     product_id      count (float)
1       1           1               1.0
2       1           5               1.54
*/
$items = [
    [
        'id' => 1,
        'name' => 'snickers',
        'price' => 200,
    ],
    [
        'id' => 2,
        'name' => 'coca-cola',
        'price' => 300,
    ],
    [
        'id' => 3,
        'name' => 'doshirak',
        'price' => 400,
    ],
    [
        'id' => 4,
        'name' => 'gorilla',
        'price' => 350,
    ],
    [
        'id' => 5,
        'name' => 'potatos',
        'price' => 200,

    ],
];
?>
<pre>
    <?php

    foreach ($items as $index => $row) {
        print_r("index = " . $index.'<br>');
        print_r("id = " . $row['id'].'<br>');
        print_r("name = " . $row['name'].'<br>');
        print_r("price = " . $row['price'].'<br>');
    }
?>
</pre>