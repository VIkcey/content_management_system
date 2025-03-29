<?php
declare(strict_types=1);
require 'includes/database-connection.php';
require 'includes/functions.php';
session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>CONTENT MANAGEMENT SYSTEM</title>
</head>

<body>
  <header>
    <nav style="position: relative">
      <a href="index.php">
        <img style="position: absolute;
  top: 0;
  left: 0; width:60px; height: 60px;" src="./img/cms-logo.png" alt="Logo">
      </a>
      <a href="index.php">Home</a>
      <a href="#about">About</a>
      <a href="#services">Categories</a>
      <a href="#contact">Contact</a>
      <?php if (isset($_SESSION['email'])): ?>
        <a style="float:right" href="logout.php">
          <li>Logout</li>
        </a>
        <a style="float:right" href="#">
          <li>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</li>
        </a>
      <?php else: ?>
        <a style="float:right" href="login.php">
          <li>
            Login
          </li>
        </a>
        <a style="float:right" href="signup.php">
          <li>
            Sign Up
          </li>
        </a>
      <?php endif; ?>


    </nav>
  </header>