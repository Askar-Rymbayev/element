<?php

// 01.01.1970

$randomDays = rand(1, 356);

$strtotime = strtotime("+{$randomDays} days");

$mktime = mktime(date('H'), date('i'), date('s'), date('m'), (int)date('d') + $randomDays, date('Y'));//21.02.2023 +1 month +21 day

$time = time() + ($randomDays * 24 * 60 * 60);

var_dump($strtotime);
var_dump($mktime);

echo date('d.m.Y H:i:s', $strtotime) . '<br>';
echo date('d.m.Y H:i:s', $time) . '<br>';
echo date('d.m.Y H:i:s', $mktime);

?>
<!-------------------------------------------------------------------------->
<?php
$categories = [
    0 => 'Все товары',
    1 => 'Принтеры',
    2 => 'Ноутбуки',
    3 => 'Мониторы',
];
// Faker
$products = [
    1 => [
        'name' => 'HP LaserJet 001',
        'category_id' => 1,
        'price' => 200,
    ],
    2 => [
        'name' => 'HP LaserJet 002',
        'category_id' => 1,
        'price' => 220,
    ],
    3 => [
        'name' => 'HP LaserJet 003',
        'category_id' => 1,
        'price' => 210,
    ],
    4 => [
        'name' => 'Asus 15HP001',
        'category_id' => 2,
        'price' => 1000,
    ],
    5 => [
        'name' => 'Asus 15HP002',
        'category_id' => 2,
    ],
    6 => [
        'name' => 'Asus 15HP003',
        'category_id' => 2,
    ],
    7 => [
        'name' => 'Samsung 001',
        'category_id' => 3,
    ],
    8 => [
        'name' => 'Samsung 002',
        'category_id' => 3,
    ],
    9 => [
        'name' => 'Samsung 003',
        'category_id' => 3,
    ],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <?php
                    foreach ($categories as $id => $categoryName) {
                        echo "<a href='?category_id=$id' class=\"list-group - item list-group - item - action active\" aria-current=\"true\">$categoryName</a>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="col">
            <?php
            if (isset($_GET['category_id'])) {
                foreach ($products as $productId => $productRow) {
                    if ($_GET['category_id'] == 0 || $_GET['category_id'] == $productRow['category_id']) {
                        ?>
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/360x360.jpg/CCCCCC?text=<?php echo $productRow['name']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $productRow['name']; ?>
                                </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <?php
                    }
                }
            } else {
                ?>
                <div class="alert alert-primary" role="alert">
                    Выберите категорию
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>