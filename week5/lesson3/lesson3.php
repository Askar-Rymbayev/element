<?php

require_once 'marketplace.php';

session_cache_expire(1);

session_start();

$action = $_GET['action'] ?? false;
$currentCategoryId = $_GET['category_id'] ?? 0;

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

function getProductsByCategory($item)
{
    global $currentCategoryId;
    if ($currentCategoryId == 0) {
        return true;
    }
    return $item['category_id'] == $currentCategoryId;
}

function sortByCategory($first, $second)
{
    if ($first['category_id'] == $second['category_id']) {
        return 0;
    }
    return ($first['category_id'] < $second['category_id']) ? -1 : 1;
}

$itemsPerPage = 2;
$currentPage = $_GET['page'] ?? 1;

$_products = $products;

uasort($_products, "sortByCategory");

$_products = array_filter($_products, "getProductsByCategory");

$_products = array_chunk($_products, $itemsPerPage, true);

$pagesCount = count($_products);

if (key_exists($currentPage - 1, $_products)) {
    $_productsPerPage = $_products[$currentPage - 1];
} else {
    $_productsPerPage = [];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="/assets/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cart</title>
</head>
<body>
<div class="container-fluid pt-2">
    <div class="row">
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
            <div class="card mb-3">
                <div class="card-header">Категории</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <?php
                        foreach ($categories as $id => $categoryName) {
                            if ($id == $currentCategoryId) {
                                ?>
                                <li class="list-group - item list-group - item - action active"><?php echo $categoryName; ?></li>
                                <?php
                            } else {
                                echo "<a href='?category_id=$id' class=\"list-group - item list-group - item - action active\" aria-current=\"true\">$categoryName</a>";
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <?php
            if (isset($_SESSION['cart'])) {
                ?>
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
                            <a href="cart.php" class="btn btn-primary mt-1">Оформить заказ</a>
                        </div>
                    </div>
                <?php
            }
            ?>
        </div>
        <div class="col-xl-10 col-lg-9 col-md-8 col-sm-12">
            <div class="row">
                <h4>
                    <?php echo $categories[$currentCategoryId]; ?>
                </h4>
                <?php
                if (!empty($_productsPerPage)) {
                    foreach ($_productsPerPage as $productId => $productRow) {
                        if ($currentCategoryId == 0 || $currentCategoryId == $productRow['category_id']) {
                            ?>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="card mb-3">
                                    <!--<img src="https://via.placeholder.com/360x360.jpg/CCCCCC?text=<?php /*echo $productRow['name']; */?>" class="card-img-top" alt="...">-->
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?php echo $productRow['name']; ?>
                                        </h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="?action=add_to_cart&product_id=<?php echo $productId; ?>" class="btn btn-primary">В корзину</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                } else {
                    ?>
                    <div class="alert alert-warning" role="alert">
                        На этой странице нет товаров
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="row">
                <div class="col">
                    <?php
                    for ($i = 1; $i <= $pagesCount; $i++) {
                        if ($currentPage == $i) {
                            ?>
                            <span><?php echo $i; ?></span>
                            <?php
                        } else {
                            ?>
                            <a href="?category_id=<?php echo $currentCategoryId; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>