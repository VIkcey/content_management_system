<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add New Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-lg rounded-4">
            <div class="card-header bg-primary text-white text-center">
                <h3>Add New Article</h3>
            </div>
            <div class="card-body">
                <form action="add-article-handler.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="summary" class="form-label">Summary</label>
                        <input type="text" name="summary" class="form-control" maxlength="254" required>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" class="form-control" rows="6" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select name="category_id" class="form-select" required>
                            <option value="">Select a category</option>
                            <?php
                            // Fetch categories from DB
                            $pdo = new PDO('mysql:host=localhost;dbname=dw3', 'root', 'root');
                            $categories = $pdo->query("SELECT id, name FROM category")->fetchAll();
                            foreach ($categories as $cat) {
                                echo "<option value='{$cat['id']}'>{$cat['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <input type="hidden" name="member_id" value="<?php echo $_SESSION['user_id']; ?>">

                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="published" value="1" id="publishCheck">
                        <label class="form-check-label" for="publishCheck">Publish this article</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Add Article</button>
                        <a href="manage-articles.php" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>