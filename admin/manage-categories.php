<?php
// Database connection
require_once '../includes/database-connection.php';

$categories = $pdo->query("SELECT * FROM category ORDER BY name")->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Manage Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4 text-center">📁 Manage Categories</h2>
        <a href="add-category.php" class="btn btn-success mb-3">➕ Add New Category</a>
        <a href="../profile.php" class="btn btn-secondary mb-3">Manage Profile</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Navigation</th>
                        <th>Featured</th>
                        <th>Popular</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $cat): ?>
                        <tr>
                            <td><?= $cat['id'] ?></td>
                            <td><?= htmlspecialchars($cat['name']) ?></td>
                            <td><?= htmlspecialchars($cat['description']) ?></td>
                            <td class="text-center"><?= $cat['navigation'] ? '✅' : '❌' ?></td>
                            <td class="text-center"><?= $cat['is_featured'] ? '⭐' : '' ?></td>
                            <td class="text-center"><?= $cat['is_popular'] ? '🔥' : '' ?></td>
                            <td>
                                <?php if ($cat['image']): ?>
                                    <img src="../category/<?= htmlspecialchars($cat['image']) ?>" alt="Image" width="50">
                                <?php else: ?>
                                    N/A
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <a href="edit-category.php?id=<?= $cat['id'] ?>" class="btn btn-sm btn-warning">✏️ Edit</a>
                                <a href="delete-category.php?id=<?= $cat['id'] ?>"
                                    onclick="return confirm('Are you sure you want to delete this category?')"
                                    class="btn btn-sm btn-danger">
                                    🗑️ Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>