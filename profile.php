<?php
declare(strict_types=1);
http_response_code(404);
require_once 'includes/database-connection.php';
require_once 'includes/functions.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// print_r($_SESSION);
// exit;


$id = $_SESSION['user_id'];
if (!$id) {
    include 'page-not-found.php';
}

$sql = "SELECT
      A.id AS article_id, A.title,   A.summary,     A.content,
      A.created, A.category_id, A.member_id, 
      C.name AS category,
      CONCAT( M.forename, ' ', M.surname ) AS author,
      I.file AS image_file,
      I.alt  AS image_alt 
    FROM article     AS A
    JOIN category    AS C  ON A.category_id = C.id
    JOIN member      AS M  ON A.member_id   = M.id
    LEFT JOIN image  AS I  ON A.image_id    = I.id
    WHERE
      A.member_id        = :id AND
      A.published = 1
    ;"
;

$article = pdo($pdo, $sql, ['id' => $id])->fetchAll();

// if (!$article) {
//     include 'page-not-found.php';
// }

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
        <?php
        if ($article) {
            foreach ($article as $art) { ?>
                <a href="articles-details.php?id=<?= $art['article_id'] ?>" class="post-card">
                    <img src="<?= 'articles/' . $art['image_file'] ?>" alt="<?= $art['title'] ?>" class="post-image">
                    <div class="post-info">
                        <h3><?= $art['title'] ?></h3>
                        <p><?= date("F j, Y", strtotime($art['created'])) ?></p>
                        <div>
                            <?= "Posted in" . " " . $art['category'] . "by " ?>
                            <?= $art['author'] ?>
                        </div>
                    </div>
                </a>
                <?php
            }
        } else {
            echo "<p style='color:red'>No articles added by this user";
        }
        ?>
        <!-- <a href="article-rome.html" class="post-card">
            <img src="img/rome.jpg" alt="Rome" class="post-image" />
            <div class="post-info">
                <h3>A Weekend in Rome</h3>
                <p>March 29, 2025</p>
            </div>
        </a> -->
        <!-- Add more saved articles dynamically here -->
    </div>

    <!-- User Actions -->
    <div class="btn-group">
        <a href="profile-edit.php" class="btn-secondary">Edit Profile</a>
        <a href="logout" class="btn-danger">Log Out</a>
    </div>
</main>


<?php include_once 'includes/footer.php' ?>