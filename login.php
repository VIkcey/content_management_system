<?php include 'includes/header.php' ?>

<!-- auth code -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // utiliser de cree mot de passe
    // $password = 'admin';
    // $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    // echo $hashed_password;
    // utiliser de cree mot de passe

    // Vérifier si l'email existe dans la base de données
    $stmt = $pdo->prepare("SELECT * FROM member WHERE email = :email");
    $stmt->execute(['email' => $email]);

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch();
        // Vérifier si le mot de passe est correct
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['username'] = $user['forename'] . " " . $user['surname'];
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

<div class="container">
    <div class="container" id="login">
        <h2>Login</h2>
        <form method="post" action="">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="switch">
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php' ?>