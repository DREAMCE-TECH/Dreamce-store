<?php
session_start();
include 'includes/config.php';
include 'includes/header.php';

  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
  }

  if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    if (!in_array($product_id, $_SESSION['cart'])) {
      $_SESSION['cart'][] = $product_id;
    }
  }

$total = 0;
?>

<main>
  <section class="cart-section fade-in">
    <h2>Mon Panier</h2>
    <div class="cart-list">
      <?php
      if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        $ids = implode(",", $_SESSION['cart']);
        $sql = "SELECT * FROM products WHERE id IN ($ids)";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
          echo "<div class='cart-item'>";
          echo "<img src='images/" . $row['image'] . "' alt='" . $row['name'] . "' class='fade-in'>";
          echo "<h3>" . $row['name'] . "</h3>";
          echo "<p>Prix: " . $row['price'] . " FCFA</p>";
          echo "<a href='remove_from_cart.php?id=".$row['id']."' class='btn'>Retirer</a>";
          echo "</div>";
          $total += $row['price'];
        }
        echo "<div>";
        echo "<p id='total'>Total: $total FCFA</p>";
        echo "<a href='checkout.php' class='btn' id='btn'>Procéder au paiement</a>";
        echo "</div>";
      } else {
        echo "<p>Votre panier est vide.</p>";
      }
      ?>
    </div>
  </section>
</main>

<?php
include 'includes/footer.php';
$conn->close();
?>