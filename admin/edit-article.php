<?php
session_start();

// Database connection
require_once '../includes/database-connection.php';
require_once '../includes/functions.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    die("Missing article ID.");
}

$stmt = $pdo->prepare("SELECT * FROM article WHERE id = ?");
$stmt->execute([$id]);
$article = $stmt->fetch();

$categories = $pdo->query("SELECT id, name FROM category")->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Article</h2>
        <form action="update-article.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $article['id'] ?>">
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" value="<?= htmlspecialchars($article['title']) ?>" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <label>Summary</label>
                <textarea name="summary" class="form-control"><?= htmlspecialchars($article['summary']) ?></textarea>
            </div>
            <div class="mb-3">
                <label>Content</label>
                <textarea name="content" class="form-control"
                    rows="6"><?= htmlspecialchars($article['content']) ?></textarea>
            </div>
            <div class="mb-3">
                <label>Category</label>
                <select name="category_id" class="form-control">
                    <?php foreach ($categories as $cat): ?>
                        <option value="<?= $cat['id'] ?>" <?= $cat['id'] == $article['category_id'] ? 'selected' : '' ?>>
                            <?= $cat['name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload New Image</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                <?php if ($article['image_id']): ?>
                    <p class="mt-2">Current Image:
                        <img src="../articles/<?= htmlspecialchars(getImageFilename($article['image_id'])) ?>" width="80">
                    </p>
                <?php endif; ?>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="published" class="form-check-input" <?= $article['published'] ? 'checked' : '' ?>>
                <label class="form-check-label">Published</label>
            </div>
            <button type="submit" class="btn btn-primary">💾 Save Changes</button>
            <a href="manage-articles.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>

</html>