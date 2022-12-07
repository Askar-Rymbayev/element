<?php

require_once 'marketplace.php';

session_cache_expire(1);

session_start();

$action = $_GET['action'] ?? false;

if ($action == 'add_to_cart') {
    $productId = $_GET['product_id'] ?? false;
    if (array_key_exists($productId, $_SESSION['cart'])) {
        $_SESSION['cart'][$productId]['count']++;
    } else {
        $_SESSION['cart'][$productId] = [
            'count' => 1,
        ];
    }
}
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
    <?php
    if (isset($_SESSION['cart'])) {
        ?>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <h5 class="card-header">Корзина</h5>
                    <div class="card-body">
                        <h5 class="card-title">Список товаров</h5>
                        <div class="card-text">
                            <ul class="list-group">
                                <?php
                                foreach ($_SESSION['cart'] as $productId => $item) {
                                    ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <?php echo $products[$productId]['name'] ?> <span class="badge bg-primary rounded-pill"><?php echo $item['count']; ?></span>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <a href="cart.php" class="btn btn-primary">Оформить заказ</a>
                    </div>
                </div>

            </div>
        </div>
        <?php
    }
    ?>
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
                            <!--<img src="https://via.placeholder.com/360x360.jpg/CCCCCC?text=<?php /*echo $productRow['name']; */?>" class="card-img-top" alt="...">-->
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $productRow['name']; ?>
                                </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="?action=add_to_cart&product_id=<?php echo $productId; ?>" class="btn btn-primary">В корзину</a>
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