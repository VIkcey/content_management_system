<?php
// Database connection
require_once '../includes/database-connection.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    die("Missing category ID.");
}

$stmt = $pdo->prepare("SELECT * FROM category WHERE id = ?");
$stmt->execute([$id]);
$category = $stmt->fetch();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Category</h2>
        <form action="update-category.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $category['id'] ?>">

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" value="<?= htmlspecialchars($category['name']) ?>" class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control"
                    required><?= htmlspecialchars($category['description']) ?></textarea>
            </div>

            <div class="form-check mb-2">
                <input type="checkbox" name="navigation" class="form-check-input" <?= $category['navigation'] ? 'checked' : '' ?>>
                <label class="form-check-label">Show in Navigation</label>
            </div>

            <div class="form-check mb-2">
                <input type="checkbox" name="is_featured" class="form-check-input" <?= $category['is_featured'] ? 'checked' : '' ?>>
                <label class="form-check-label">Featured</label>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" name="is_popular" class="form-check-input" <?= $category['is_popular'] ? 'checked' : '' ?>>
                <label class="form-check-label">Popular</label>
            </div>

            <div class="mb-3">
                <label class="form-label">Upload New Image (optional)</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                <?php if ($category['image']): ?>
                    <p class="mt-2">Current Image: <img src="../category/<?= htmlspecialchars($category['image']) ?>"
                            height="80"></p>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Update Category</button>
            <a href="manage-categories.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>

</html>