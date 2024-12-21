<?php
session_start();
include 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $total = $_POST['total'];
  // Logique pour le traitement du paiement avec PayPal ici

  // Vider le panier après le paiement
  $_SESSION['cart'] = [];
}
?>

<main>
  <section class="thank-you fade-in">
    <h2>Merci pour votre achat !</h2>
    <p>Votre paiement de <?php echo $total; ?> FCFA a été reçu.</p>
    <a href="index.php" class="btn">Retour à l'accueil</a>
  </section>
</main>

<?php
include 'includes/footer.php';
?>