<?php
// Database connection
require_once '../includes/database-connection.php';

$articles = $pdo->query("
    SELECT a.id, a.title, a.published, c.name AS category,  CONCAT(m.forename, ' | ', m.surname) AS author, a.created
    FROM article a
    JOIN category c ON a.category_id = c.id
    JOIN member m ON a.member_id = m.id
    ORDER BY a.created DESC
")->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Manage Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4 text-center">📝 Manage Articles</h2>
        <a href="add-article.php" class="btn btn-success mb-3">➕ Add New Article</a>
        <a href="../profile.php" class="btn btn-secondary mb-3">Manage Profile</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Published</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article): ?>
                        <tr>
                            <td><?= $article['id'] ?></td>
                            <td><?= htmlspecialchars($article['title']) ?></td>
                            <td><?= $article['category'] ?></td>
                            <td><?= $article['author'] ?></td>
                            <td class="text-center"><?= $article['published'] ? '✅' : '❌' ?></td>
                            <td><?= $article['created'] ?></td>
                            <td class="text-center">
                                <a href="edit-article.php?id=<?= $article['id'] ?>" class="btn btn-sm btn-warning">✏️
                                    Edit</a>
                                <a href="delete-article.php?id=<?= $article['id'] ?>"
                                    onclick="return confirm('Are you sure you want to delete this article?')"
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