<?php
session_start();
// Database connection
require_once '../includes/database-connection.php';

$id = $_POST['id'];
$title = $_POST['title'];
$summary = $_POST['summary'];
$content = $_POST['content'];
$categoryId = $_POST['category_id'];
$published = isset($_POST['published']) ? 1 : 0;

// Handle file upload
$imageId = null;
if (!empty($_FILES['image']['name'])) {
    $fileName = time() . '_' . basename($_FILES['image']['name']);
    $uploadDir = '../articles/';
    $targetPath = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
        // Save to image table
        $stmt = $pdo->prepare("INSERT INTO image (file) VALUES (?)");
        $stmt->execute([$fileName]);
        $imageId = $pdo->lastInsertId();
    }
}

// Update article with or without image
if ($imageId) {
    $stmt = $pdo->prepare("UPDATE article SET title = ?, summary = ?, content = ?, category_id = ?, published = ?, image_id = ? WHERE id = ?");
    $stmt->execute([$title, $summary, $content, $categoryId, $published, $imageId, $id]);
} else {
    $stmt = $pdo->prepare("UPDATE article SET title = ?, summary = ?, content = ?, category_id = ?, published = ? WHERE id = ?");
    $stmt->execute([$title, $summary, $content, $categoryId, $published, $id]);
}

header("Location: manage-articles.php");
exit;
