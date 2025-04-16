<?php
declare(strict_types=1);
include_once 'includes/database-connection.php';
include_once 'includes/functions.php';
session_start(); // Start the session


$id = $_GET['id'];
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
      A.category_id        = :id AND
      A.published = 1
    ;"
;

$article = pdo($pdo, $sql, ['id' => $id])->fetchAll();

if (!$article) {
    include 'page-not-found.php';
}


// print_r($article);
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

    <section class="">
        <h2 class="category-title">Articles in Asia</h2>
        <div class="post-grid nav-container">
            <?php foreach ($article as $art) { ?>
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
            <?php } ?>
        </div>
    </section>
</div>

<?php include_once 'includes/footer.php' ?>