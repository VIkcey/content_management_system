<?php include 'includes/header.php' ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $pdo->prepare("SELECT * FROM member WHERE email = :email");
    $stmt->execute(['email' => $email]);

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch();
        // Vérifier si le mot de passe est correct
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['username'] = $user['forename'];
            $_SESSION['surname'] = $user['surname'];
            $_SESSION['created_at'] = $user['joined'];
            header("Location: index.php"); // Rediriger vers la page de tableau de bord
            exit();
        } else {
            echo "<p style='text-align: center;
  color: red;
  font-weight: bold'>Mot de passe incorrect</p>";
        }
    } else {
        echo "<p style='text-align: center;
  color: red;
  font-weight: bold' >Aucun utilisateur trouvé avec cet email</p>";
    }
}
?>

<!-- auth code -->
<div class="container myContainerAuth">
    <div class="auth-container" id="login">
        <h2>Welcome Back 🌍</h2>
        <form action="" method="POST" class="auth-form">
            <input type="email" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Password" required />
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
        </form>
    </div>
</div>

<?php include 'includes/footer.php' ?>