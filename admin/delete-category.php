<?php
// Database connection
require_once '../includes/database-connection.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid category ID.");
}

$categoryId = (int) $_GET['id'];

// Optionally: check if the category exists
$stmt = $pdo->prepare("SELECT * FROM category WHERE id = ?");
$stmt->execute([$categoryId]);
$category = $stmt->fetch();

if (!$category) {
    die("Category not found.");
}

// Optionally: delete the image file from the server
if (!empty($category['image']) && file_exists('../category/' . $category['image'])) {
    unlink('../category/' . $category['image']);
}

// Delete the category
$stmt = $pdo->prepare("DELETE FROM category WHERE id = ?");
$stmt->execute([$categoryId]);

// Redirect or show success message
header("Location: manage-categories.php?deleted=1");
exit;
?>