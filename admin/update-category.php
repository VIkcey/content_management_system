<?php
// Database connection
require_once '../includes/database-connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$navigation = isset($_POST['navigation']) ? 1 : 0;
$is_featured = isset($_POST['is_featured']) ? 1 : 0;
$is_popular = isset($_POST['is_popular']) ? 1 : 0;

// Handle optional image upload
$imageName = null;
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = '../category/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    $filename = uniqid() . '-' . basename($_FILES['image']['name']);
    $targetPath = $uploadDir . $filename;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
        $imageName = $filename;
    }
}

// Update category
if ($imageName) {
    $stmt = $pdo->prepare("UPDATE category SET name = ?, description = ?, navigation = ?, is_featured = ?, is_popular = ?, image = ? WHERE id = ?");
    $stmt->execute([$name, $description, $navigation, $is_featured, $is_popular, $imageName, $id]);
} else {
    $stmt = $pdo->prepare("UPDATE category SET name = ?, description = ?, navigation = ?, is_featured = ?, is_popular = ? WHERE id = ?");
    $stmt->execute([$name, $description, $navigation, $is_featured, $is_popular, $id]);
}

header("Location: manage-categories.php");
exit;
