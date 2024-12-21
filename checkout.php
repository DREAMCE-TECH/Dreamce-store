<?php
session_start();
include 'includes/config.php';
include 'includes/header.php';

$total = 0;
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
  $ids = implode(",", $_SESSION['cart']);
  $sql = "SELECT * FROM products WHERE id IN ($ids)";
  $result = $conn->query($sql);

  while ($row = $result->fetch_assoc()) {
    $total += $row['price'];
  }
}
?>

<main>
  <section class="checkout-section fade-in">
    <h2>Informations de Paiement</h2>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
      <input type="hidden" name="cmd" value="_xclick">
      <input type="hidden" name="business" value="waleubrice76@gmail.com">
      <input type="hidden" name="item_name" value="Achat de chaussures">
      <p>Total à payer : <?php echo $total; ?> FCFA</p>
      <input type="hidden" name="total" value="<?php echo $total; ?>">
      <input type="hidden" name="currency_code" value="FCFA">
      <input type="hidden" name="return" value="http://yourwebsite.com/success.php">
      <input type="hidden" name="cancel_return" value="http://yourwebsite.com/cancel.php">
      <button type="submit" class="btn">Payer avec PayPal</button>
    </form><br>
    <button type="submit" class="btn productButton">Payer par carte</button>
    <div id="payment">
      <div class="payment">
        <h1 class="payTitle">Information personnel</h1>
        <label>nom et prénom</label>
        <input type="text" placeholder="John Doe" class="payInput">
        <label>numéro</label>
        <input type="text" placeholder="+237 679 00 00 00" class="payInput">
        <label>Addresse</label>
        <input type="text" placeholder="Elton St 21 22-145" class="payInput">
        <h1 class="payTitle">Information de la cart</h1>
        <div class="cardIcons">
          <img src="./images/visa.png" width="40" alt="" class="cardIcon">
          <img src="./images/master.png" alt="" width="40" class="cardIcon">
        </div>
        <input type="password" class="payInput" placeholder="Card Number">
        <div class="cardInfo">
          <input type="text" placeholder="mm" class="payInput sm">
          <input type="text" placeholder="yyyy" class="payInput sm">
          <input type="text" placeholder="cvv" class="payInput sm">
        </div>
        <button class="payButton">Valider!</button>
        <span class="close">X</span>
      </div>
    </div>

  </section>
</main>

<?php
include 'includes/footer.php';
?>