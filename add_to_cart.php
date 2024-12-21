<?php
session_start();
include 'includes/config.php';

if (isset($_GET['id'])) {
  $product_id = $_GET['id'];

  // Ajoutez le produit au panier dans la session
  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
  }

  // Vérifiez si le produit est déjà dans le panier
  if (!in_array($product_id, $_SESSION['cart'])) {
    $_SESSION['cart'][] = $product_id;
  }

  header("Location: catalogue.php");
  exit();
}
