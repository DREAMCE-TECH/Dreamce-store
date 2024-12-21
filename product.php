<?php
include 'includes/config.php';
include 'includes/header.php';

if (isset($_GET['id'])) {
  $product_id = $_GET['id'];
  $sql = "SELECT * FROM products WHERE id = $product_id";
  $result = $conn->query($sql);
  $product = $result->fetch_assoc();
}
?>

<main>
  <section class="product-detail fade-in">
    <?php if ($product): ?>
      <h2><?php echo $product['name']; ?></h2>
      <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="fade-in">
      <p><?php echo $product['description']; ?></p>
      <p>Prix: <?php echo $product['price']; ?> FCFA</p>
      <p>Stock: <?php echo $product['stock']; ?> unités</p>
      <a href="add_to_cart.php?id=<?php echo $product['id']; ?>" class="btn">Ajouter au panier</a>
    <?php else: ?>
      <p>Produit non trouvé.</p>
    <?php endif; ?>
  </section>
</main>

<?php
include 'includes/footer.php';
$conn->close();
?>