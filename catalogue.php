<?php
include 'includes/config.php';
include 'includes/header.php';

// Requête pour obtenir les produits
$sql = "SELECT * FROM products LIMIT 12";
$result = $conn->query($sql);
?>

<main>
  <section class="product-section">
    <h2>Nos Produits</h2>
    <!-- <div class="search-container">
      <input type="text" id="search-bar" placeholder="Rechercher des chaussures...">
      <button id="search-button">Rechercher</button>
    </div> -->

    <div class="filters">
      <label for="size">Taille :</label>
      <select id="size">
        <option value="all">Toutes</option>
        <option value="38">38</option>
        <option value="39">39</option>
        <option value="39">40</option>
        <option value="39">41</option>
      </select>
      <label for="color">Couleur :</label>
      <select id="color">
        <option value="all">Toutes</option>
        <option value="black">Noir</option>
        <option value="white">Blanc</option>
        <option value="white">Beu</option>
        <option value="white">vert</option>
      </select>
    </div>
    
    <div class="product-list">
      <?php
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<div class='product'>";
          echo "<img src='images/" . $row['image'] . "' alt='" . $row['name'] . "' class='fade-in'>";
          echo "<h3>" . $row['name'] . "</h3>";
          echo "<p>" . $row['description'] . "</p>";
          echo "<p>Prix: " . $row['price'] . " FCFA</p>";
          echo "<p>Stock: " . $row['stock'] . " unités</p>";
          echo "<a href='add_to_cart.php?id=" . $row['id'] . "' class='btn'>Ajouter au panier</a>";
          echo "</div>";
        }
      } else {
        echo "Aucun produit disponible.";
      }
      ?>
    </div>
  </section>
</main>

<?php
include 'includes/footer.php';
$conn->close();
?>