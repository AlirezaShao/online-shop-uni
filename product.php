<?php
include "data/products.php";
$id = $_GET['id'];
$product = $products[$id];
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title><?= $product['name'] ?></title>
</head>
<body>
    <h1><?= $product['name'] ?></h1>
    <img src="<?= $product['image'] ?>" alt="">
    <p>قیمت: <?= number_format($product['price']) ?> تومان</p>
    <form action="add_to_cart.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit">افزودن به سبد خرید</button>
    </form>
    <a href="index.php">بازگشت</a>
</body>
</html>
