<!DOCTYPE html>
<html>

<head>
    <title>Add Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-lg rounded-4">
            <div class="card-header bg-primary text-white text-center">
                <h3>Add New Category</h3>
            </div>
            <div class="card-body">
                <form action="add-category-handler.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="name" placeholder="e.g., Asia" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Short Description</label>
                        <textarea class="form-control" name="description" rows="3"
                            placeholder="Temples, street food & ancient wonders" required></textarea>
                    </div>

                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" name="navigation" value="1" id="navSwitch">
                        <label class="form-check-label" for="navSwitch">Show in Navigation</label>
                    </div>

                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" name="is_featured" value="1"
                            id="featuredSwitch">
                        <label class="form-check-label" for="featuredSwitch">Mark as Featured</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="is_popular" value="1" id="popularSwitch">
                        <label class="form-check-label" for="popularSwitch">Mark as Popular</label>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image Filename</label>
                        <input type="file" class="form-control" name="image" placeholder="e.g., asia.jpg">
                    </div>

                    <div class="d-grid">
                        <button type="submit" name="create" class="btn btn-success">Add Category</button>
                        <a href="manage-categories.php" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>