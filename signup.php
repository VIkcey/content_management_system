<?php include 'includes/header.php' ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hacher le mot de passe
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Vérifier si l'utilisateur existe déjà
    $stmt = $pdo->prepare("SELECT * FROM member WHERE email = :email");
    $stmt->execute(['email' => $email]);

    if ($stmt->rowCount() > 0) {
        echo "<p style='text-align: center;
  color: red;
  font-weight: bold'>Un utilisateur avec cet email existe déjà</p>";
    } else {
        // Insérer l'utilisateur dans la base de données
        $sql = "INSERT INTO member (forename, surname, email, password) VALUES (:forename, :surname, :email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'forename' => $forename,
            'surname' => $surname,
            'email' => $email,
            'password' => $hashed_password
        ]);
        echo "<p style='text-align: center;
  color: green;
  font-weight: bold'>Inscription réussie ! Vous pouvez maintenant vous connecter</p>";
    }
}

?>

<!-- <div class="container" id="signup">
    <h2>Sign Up</h2>
    <form action="signup.php" method="POST">
        <label for="forename">First Name :</label>
        <input type="text" name="forename" required><br><br>
        <label for="surname">Last Name :</label>
        <input type="text" name="surname" required><br><br>
        <label for="email">Email :</label>
        <input type="email" name="email" required><br><br>
        <label for="password">Password :</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Register</button>
    </form>
    <div class="switch">
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</div> -->

<div class="container myContainerAuth">
    <div class="auth-container">
        <h2>Create Your Account ✈️</h2>
        <form action="" method="POST" class="auth-form">
            <input type="text" name="forename" placeholder="First Name" required />
            <input type="text" name="surname" placeholder="Last Name" required />
            <input type="email" placeholder="Email" name="email" required />
            <input type="password" name="password" placeholder="Password" required />
            <button type="submit">Sign Up</button>
            <p>Already have an account? <a href="login">Log in here</a></p>
        </form>
    </div>
</div>

<?php include 'includes/footer.php' ?>