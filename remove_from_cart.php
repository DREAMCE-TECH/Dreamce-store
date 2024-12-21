<?php
session_start();
include 'includes/view_cart.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "DELETE FROM products WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    header("Location: view_cart.php");
  } else {
    echo "Erreur : " . $conn->error;
  }
  $conn->close();
}