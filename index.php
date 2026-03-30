<?php
require_once __DIR__ . '/classes/Product.php';
$products = [
    1 => new Product(1, 'Телефон', 500),
    2 => new Product(2, 'Ноутбук', 1200),
    3 => new Product(3, 'Наушники', 150),
];
?>

<h1>Товары</h1>
<?php foreach ($products as $product): ?>
    <div>
        <strong><?= $product->getTitle() ?></strong> -
        <?= $product->getPrice() ?> $
        <a href="add.php?id=<?= $product->getId() ?>">Добавить в корзину</a>
    </div>
<?php endforeach; ?>

<br>
<a href="cart.php">Перейти в корзину</a>