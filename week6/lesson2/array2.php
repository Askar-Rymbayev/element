<?php
/*

people
id      firstName   parentId
1       Papa        null
2       Askar       1
3       Azamat      1

*/

// выбор из БД, сделал манипуляцию, сформировал

$array = [
    1 => [
        'id' => 1,
        'firstName' => 'Papa',
        'children' => [
            2 => [
                'id' => 2,
                'firstName' => 'Askar',
            ],
            3 => [
                'id' => 3,
                'firstName' => 'Azamat',
            ],
        ]
    ]
];

?>
<pre>
<?php
    print_r($array[1]['firstName']);
    ?>
</pre>
