<?php
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Cart.php';

$products = require __DIR__ . '/data/products.php';
session_start();
$products = [
    1 => new Product(1, 'Телефон', 500),
    2 => new Product(2, 'Ноутбук', 1200),
    3 => new Product(3, 'Наушники', 150),
];

$id = (int)($_GET['id'] ?? 0);
if (isset($products[$id])) {
    $product = $products[$id];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = new Cart();
    }
    $_SESSION['cart']->add($product);
}
header('Location: index.php');
exit;