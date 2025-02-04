<?php
include_once 'includes/functions.inc.php';

if (!isset($_POST['submit'])) {
    header('Location:checkout.php');
    exit();
}

$name = htmlspecialchars($_POST["name"]);
$address = htmlspecialchars($_POST["address"]);
$number = htmlspecialchars($_POST["contact_number"]);
$id = htmlspecialchars($_GET['cakeID']);

$response = addOrder($name, $address, $number, $id);

if ($response) {
    header('checkout.php?status=ordersuccess');
    exit();
} else {
    header('shopping.php?error=orderfailed');
    exit();
}
