<?php
session_start();
include 'includes/config.php';
include 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = $conn->query($sql);
  $user = $result->fetch_assoc();

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    header("Location: index.php");
    exit();
  } else {
    $error = "Nom d'utilisateur ou mot de passe incorrect.";
  }
}
?>

<main>
  <section class="login-section fade-in">
    <h2>Connexion</h2>
    <form action="login.php" method="post">
      <input type="text" name="username" placeholder="Nom d'utilisateur" required>
      <input type="password" name="password" placeholder="Mot de passe" required>
      <button type="submit" class="btn">Se connecter</button>
      <?php if (isset($error)) echo "<p>$error</p>"; ?>
    </form>
  </section>
</main>

<?php
include 'includes/footer.php';
?>