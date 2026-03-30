<?php
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Cart.php';
session_start();

$id = (int)($_GET['id'] ?? 0);

if (isset($_SESSION['cart'])) {
    $_SESSION['cart']->remove($id);
}
header('Location: cart.php');
exit;