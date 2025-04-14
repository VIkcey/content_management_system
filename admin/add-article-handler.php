<?php
session_start();
// Database connection
require_once '../includes/database-connection.php';

// $memberId = $_SESSION['member_id']; // or $_POST['member_id'] if you prefer

// Get article info
$title = $_POST['title'];
$summary = $_POST['summary'];
$content = $_POST['content'];
$categoryId = $_POST['category_id'];
$memberId = $_POST['member_id'];
$published = isset($_POST['published']) ? 1 : 0;

// Handle image upload
$imageId = null;
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = '../articles/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // create uploads/ if not exists
    }

    $originalName = basename($_FILES['image']['name']);
    $uniqueName = uniqid() . '-' . $originalName;
    $targetFile = $uploadDir . $uniqueName;

    // Move uploaded file
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        // Insert into image table
        $stmt = $pdo->prepare("INSERT INTO image (file) VALUES (:filename)");
        $stmt->execute([':filename' => $uniqueName]);
        $imageId = $pdo->lastInsertId();
    }
}

// Insert into article table
$sql = "INSERT INTO article (title, summary, content, category_id, member_id, image_id, published)
        VALUES (:title, :summary, :content, :category_id, :member_id, :image_id, :published)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':title' => $title,
    ':summary' => $summary,
    ':content' => $content,
    ':category_id' => $categoryId,
    ':member_id' => $memberId,
    ':image_id' => $imageId,
    ':published' => $published,
]);

echo "<div style='text-align:center; margin-top:40px; font-family:Arial, sans-serif;'>
        <h2 style='color: green;'>✅ Article added successfully!</h2>
        <a href='add-article.php' style='text-decoration: none; color: #007bff;'>➕ Add Another Article</a>
      </div>";
?>