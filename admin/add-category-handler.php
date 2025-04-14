<?php
// Database connection
require_once '../includes/database-connection.php';

// Get POST data
$name = $_POST['name'];
$description = $_POST['description'];
$navigation = isset($_POST['navigation']) ? 1 : 0;
$is_featured = isset($_POST['is_featured']) ? 1 : 0;
$is_popular = isset($_POST['is_popular']) ? 1 : 0;

// Handle image upload
$imageName = null;
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = '../category/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $originalName = basename($_FILES['image']['name']);
    $imageName = uniqid() . '-' . $originalName;
    $targetPath = $uploadDir . $imageName;

    move_uploaded_file($_FILES['image']['tmp_name'], $targetPath);
}

// Insert into the `category` table
$sql = "INSERT INTO category (name, description, navigation, is_featured, is_popular, image)
        VALUES (:name, :description, :navigation, :is_featured, :is_popular, :image)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':name' => $name,
    ':description' => $description,
    ':navigation' => $navigation,
    ':is_featured' => $is_featured,
    ':is_popular' => $is_popular,
    ':image' => $imageName,
]);

// Success message
echo "<div style='text-align:center; margin-top:40px; font-family:Arial, sans-serif;'>
        <h2 style='color: green;'>✅ Category added successfully!</h2>
        <a href='add-category.php' style='text-decoration: none; color: #007bff; margin-right:20px;'>➕ Add Another Category</a>
        <a href='../profile.php' style='text-decoration: none; color: #007bff;'>Back to profile</a>
      </div>";
?>