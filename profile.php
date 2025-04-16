<?php
declare(strict_types=1);
http_response_code(404);
require_once 'includes/database-connection.php';
require_once 'includes/functions.php';
?>


<?php include_once 'includes/header.php' ?>
<!-- PROFILE SECTION -->
<main class="profile-container">
    <div class="profile-header">
        <?php if ($_SESSION['picture']) { ?>
            <img src="<?= 'uploads/' . $_SESSION['picture'] ?>" class="profile-avatar" alt="User Avatar" width="200">
        <?php } ?>
        <div class="profile-details">
            <h2><?= htmlspecialchars($_SESSION['username'] . ' ' . $_SESSION['surname']) ?></h2>
            <p>Email: <?= htmlspecialchars($_SESSION['email']) ?></p>
            <p>Joined: <?= date('F Y', strtotime($_SESSION['created_at'])) ?></p>
        </div>
        <div class="profile-details">
            <a href="admin/manage-categories.php" class="btn-secondary">Manage Categories</a>
            <a href="admin/manage-articles.php" class="btn-secondary">Manage Articles</a>
        </div>
    </div>

    <!-- Saved Articles -->
    <h3 class="section-title">Saved Articles</h3>
    <div class="post-grid">
        <a href="article-bali.html" class="post-card">
            <img src="img/bali.jpg" alt="Bali" class="post-image" />
            <div class="post-info">
                <h3>Hidden Beaches of Bali</h3>
                <p>April 4, 2025</p>
            </div>
        </a>
        <a href="article-rome.html" class="post-card">
            <img src="img/rome.jpg" alt="Rome" class="post-image" />
            <div class="post-info">
                <h3>A Weekend in Rome</h3>
                <p>March 29, 2025</p>
            </div>
        </a>
        <!-- Add more saved articles dynamically here -->
    </div>

    <!-- User Actions -->
    <div class="btn-group">
        <a href="profile-edit.php" class="btn-secondary">Edit Profile</a>
        <a href="logout.php" class="btn-danger">Log Out</a>
    </div>
</main>


<?php include_once 'includes/footer.php' ?>