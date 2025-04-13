<?php
declare(strict_types=1);
include_once 'includes/database-connection.php';
include_once 'includes/functions.php';
session_start(); // Start the session

$sql1 = "SELECT * FROM category WHERE navigation = 1 AND is_popular = 0;";
$category = pdo($pdo, $sql1)->fetchAll();


$sql2 = "SELECT * FROM category WHERE navigation = 1 AND is_popular = 1;";
$popular_cat = pdo($pdo, $sql2)->fetchAll();

// print_r($popular_cat);
// exit;

?>

<?php include_once 'includes/header.php'; ?>
<div class="container">
    <section class="hero">
        <div class="hero-content">
            <h2>Explore Destinations</h2>
            <p>Choose your next journey across continents</p>
        </div>
    </section>

    <!-- Destination Categories -->
    <section class="">
        <h2 class="category-title">Continents</h2>
        <div class="post-grid nav-container">
            <?php foreach ($category as $cat) { ?>
                <a href="categories-details?id=<?= $cat['id'] ?>" class="post-card">
                    <img src="<?= 'uploads/' . $cat['image'] ?>" alt="<?= $cat['name'] ?>" class="post-image">
                    <div class="post-info">
                        <h3><?= $cat['name'] ?></h3>
                        <p><?= $cat['description'] ?></p>
                    </div>
                </a>
            <?php } ?>
        </div>
    </section>
    <!-- Popular Destinations -->
    <section class="">
        <h2 class="category-title">Popular Destinations</h2>
        <div class="post-grid nav-container">
            <?php foreach ($popular_cat as $cat) { ?>
                <a href="categories-details?id=<?= $cat['id'] ?>" class="post-card">
                    <img src="<?= 'uploads/' . $cat['image'] ?>" alt="<?= $cat['name'] ?>" class="post-image">
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