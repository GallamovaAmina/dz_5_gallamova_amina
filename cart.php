<?php
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Cart.php';
session_start();

$cart = $_SESSION['cart'] ?? new Cart();
$items = $cart->getItems();
?>
<h1>Корзина</h1>

<?php if (empty($items)): ?>
    <p>Корзина пуста</p>
<?php else: ?>
    <?php foreach ($items as $item): ?>
        <div>
            <strong><?= $item['product']->getTitle() ?></strong>
            | Цена: <?= $item['product']->getPrice() ?> $
            | Кол-во: <?= $item['quantity'] ?>
            | Сумма: <?= $item['product']->getPrice() * $item['quantity'] ?> $
            <a href="remove.php?id=<?= $item['product']->getId() ?>">Удалить</a>
        </div>
    <?php endforeach; ?>

    <h3>Итого: <?= $cart->getTotal() ?> $</h3>

    <a href="clear.php">Очистить корзину</a>
<?php endif; ?>

<br><br>
<a href="index.php">Назад к товарам</a>