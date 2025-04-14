<?php
session_start();
require 'includes/database-connection.php'; // contains DB connection: $pdo

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$userId = $_SESSION['user_id'];
$username = trim($_POST['username']);
$surname = trim($_POST['surname']);
$email = trim($_POST['email']);
$password = $_POST['password']; // plaintext
$picture = $_FILES['picture'];

// Validate inputs
$errors = [];

if (empty($username))
    $errors[] = "First Name is required.";
if (empty($surname))
    $errors[] = "Last Name is required.";
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
    $errors[] = "Valid email is required.";

// Handle picture upload
$pictureFilename = null;
if ($picture['size'] > 0 && $picture['error'] === UPLOAD_ERR_OK) {
    $allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];
    if (!in_array($picture['type'], $allowedTypes)) {
        $errors[] = "Only JPG, PNG, and WebP images are allowed.";
    } else {
        $ext = pathinfo($picture['name'], PATHINFO_EXTENSION);
        $pictureFilename = uniqid('picture_') . '.' . $ext;
        $uploadDir = __DIR__ . '/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        move_uploaded_file($picture['tmp_name'], $uploadDir . $pictureFilename);
    }
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header("Location: edit-profile.php");
    exit();
}

// Build update query dynamically
$params = [
    ':username' => $username,
    ':surname' => $surname,
    ':email' => $email,
    ':id' => $userId
];

$sql = "UPDATE member SET forename = :username, surname = :surname, email = :email";

if (!empty($password)) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql .= ", password = :password";
    $params[':password'] = $hashedPassword;
}

if ($pictureFilename) {
    $sql .= ", picture = :picture";
    $params[':picture'] = $pictureFilename;
}

$sql .= " WHERE id = :id";

// Execute update
$stmt = $pdo->prepare($sql);
$stmt->execute($params);

// Update session values
$_SESSION['username'] = $username;
$_SESSION['surname'] = $surname;
$_SESSION['email'] = $email;
if ($pictureFilename) {
    $_SESSION['picture'] = $pictureFilename;
}

$_SESSION['success'] = "Profile updated successfully.";
header("Location: profile");
exit();
