<?php

require_once 'marketplace.php';

session_start();

var_dump($_POST);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Корзина</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <form method="post">

                <?php
                if (isset($_SESSION['cart'])) {
                    ?>
                    <ul class="list-group">
                        <?php
                        foreach ($_SESSION['cart'] as $productId => $item) {
                            ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?php echo $products[$productId]['name'] ?>
                                <input type="text" name="product[<?php echo $productId; ?>][count]" value="<?php echo $item['count']; ?>">
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <?php
                }
                ?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
