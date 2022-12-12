<?php

require_once 'marketplace.php';

session_start();
$sum = 0;
foreach ($_SESSION['cart'] as $productId => $row) {
    $sum += $products[$productId]['price'] * $row['count'];
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
    <title>Корзина</title>
</head>
<body>
<div class="container-fluid pt-2">
    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <div class="card-header">Оформление заказа</div>
                <div class="card-body">
                    <form action="cart2.php" method="post" class="m-2">

                        <?php
                        if (isset($_SESSION['cart'])) {
                            ?>
                            <h5>Товары</h5>
                            <ul class="list-group mb-3">
                                <?php
                                foreach ($_SESSION['cart'] as $productId => $item) {
                                    ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <?php echo $products[$productId]['name'] ?>
                                        <input type="text" name="products[<?php echo $productId; ?>]" class="form-control" value="<?php echo $item['count']; ?>">
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                            <p>Сумма товаров: <?php echo $sum; ?></p>
                            <?php
                        }
                        ?>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <?php if (isset($_GET['emailErr'])) { ?>
                                <div id="emailHelp" class="form-text"><?php echo $_GET['emailErr']; ?></div>
                            <?php } ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" name="city" class="form-control" aria-describedby="emailHelp">
                            <?php if (isset($_GET['cityErr'])) { ?>
                                <div id="emailHelp" class="form-text"><?php echo $_GET['cityErr']; ?></div>
                            <?php } ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text"  name="phone" class="form-control" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
