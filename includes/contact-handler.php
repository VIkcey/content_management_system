<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    if ($name && $email && $message) {
        // Example: Send an email or store in DB
        // mail(...); or insert into database

        header('Location: ../thankyou.php');
        exit;
    } else {
        echo "Please fill out all fields correctly.";
    }
}
?>