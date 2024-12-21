<?php
session_start();
include 'includes/config.php';
include 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $email = $_POST['email'];

  $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
  if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
    exit();
  } else {
    $error = "Erreur lors de l'inscription.";
  }
}
?>

<main>
  <section class="register-section fade-in">
    <h2>S'inscrire</h2>
    <form action="register.php" method="post">
      <input type="text" name="username" placeholder="Nom d'utilisateur" required>
      <input type="password" name="password" placeholder="Mot de passe" required>
      <input type="email" name="email" placeholder="Email" required>
      <button type="submit" class="btn">S'inscrire</button>
      <?php if (isset($error)) echo "<p>$error</p>"; ?>
    </form>
    <h4>Si vous avez déjà un compte vous pouvez tout simplement vous connecter <a href="login.php">ici</a></h4>
  </section>
</main>

<?php
include 'includes/footer.php';
?>