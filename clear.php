<?php
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Cart.php';
session_start();

if (isset($_SESSION['cart'])) {
    $_SESSION['cart']->clear();
}
header('Location: cart.php');
exit;