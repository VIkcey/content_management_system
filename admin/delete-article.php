<?php
// Database connection
require_once '../includes/database-connection.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid article ID.");
}

$articleId = (int) $_GET['id'];

// Optional: check if the article exists first
$stmt = $pdo->prepare("SELECT * FROM article WHERE id = ?");
$stmt->execute([$articleId]);
$article = $stmt->fetch();

if (!$article) {
    die("Article not found.");
}

// Delete the article
$stmt = $pdo->prepare("DELETE FROM article WHERE id = ?");
$stmt->execute([$articleId]);

// Optional: delete associated image if needed
if (!empty($article['image_id'])) {
    $imgStmt = $pdo->prepare("SELECT * FROM image WHERE id = ?");
    $imgStmt->execute([$article['image_id']]);
    $image = $imgStmt->fetch();

    if ($image && file_exists('../articles/' . $image['file'])) {
        unlink('../articles/' . $image['file']);
    }

    // Optionally delete image record from image table
    $pdo->prepare("DELETE FROM image WHERE id = ?")->execute([$article['image_id']]);
}

// Redirect or show confirmation
header("Location: manage-articles.php?deleted=1");
exit;
?>