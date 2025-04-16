<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/favicon.png" type="image/png">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/auth.css">
  <link rel="stylesheet" href="./css/about.css">
  <link rel="stylesheet" href="./css/contact.css">

  <title>WanderLog | Explore, Dream, Discover</title>
</head>

<body>
  <header class="site-header sticky-nav">
    <div class="nav-container">
      <a href="index" class="logo">
        <img src="img/logo.png" alt="WanderLog logo" height="90" width="auto">
      </a>
      <nav class="nav-links">
        <a href="index.php">Home</a>
        <a href="categories.php">Destinations</a>
        <a href="about.php">About</a>
        <a href="contactus.php">Contact</a>
        <?php if (isset($_SESSION['email'])): ?>
          <a href="logout.php">Logout</a>
          <a href="profile.php">
            Hello, <?php echo htmlspecialchars($_SESSION['username'] . " " . $_SESSION['surname']); ?>!
          </a>
        <?php else: ?>
          <a href="login.php">
            Login
          </a>
          <a href="signup.php">
            Sign Up
          </a>
        <?php endif; ?>
      </nav>
    </div>
  </header>