<?php
declare(strict_types=1);
http_response_code(404);
require_once 'includes/database-connection.php';
require_once 'includes/functions.php';

$sql1 = "SELECT * FROM category WHERE navigation = 1 ORDER BY RAND() LIMIT 3;";
$category = pdo($pdo, $sql1)->fetchAll();


$sql2 = "SELECT * FROM category WHERE navigation = 1 AND is_featured = 1;";
$featured_cat = pdo($pdo, $sql2)->fetchAll();

?>

<?php include_once 'includes/header.php'; ?>
<div class="container">
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Discover the World One Adventure at a Time</h2>
            <p>Inspiration, tips, and stories from travelers around the globe</p>
            <a href="categories.php" class="btn-primary">Explore Destinations</a>
        </div>
    </section>

    <!-- Latest Posts -->
    <main class="">
        <h2 class="category-title">Latest Adventures</h2>
        <div class="post-grid nav-container">
            <?php foreach ($category as $cat) { ?>
                <a href="categories-details?id=<?= $cat['id'] ?>" class="post-card">
                    <img src="<?= 'category/' . $cat['image'] ?>" alt="<?= $cat['name'] ?>" class="post-image">
                    <div class="post-info">
                        <h3><?= $cat['name'] ?></h3>
                        <p>March 29, 2025</p>
                    </div>
                </a>
            <?php } ?>
        </div>
    </main>

    <!-- Featured Categories -->
    <section class="">
        <h2 class="category-title">Featured Categories</h2>
        <div class="post-grid nav-container">
            <?php foreach ($featured_cat as $cat) { ?>
                <a href="categories-details?id=<?= $cat['id'] ?>" class="post-card">
                    <img src="<?= 'category/' . $cat['image'] ?>" alt="<?= $cat['name'] ?>" class="post-image">
                    <div class="post-info">
                        <h3><?= $cat['name'] ?></h3>
                        <p><?= $cat['description'] ?></p>
                    </div>
                </a>
            <?php } ?>
        </div>
    </section>
</div>

<?php include_once 'includes/footer.php' ?>
