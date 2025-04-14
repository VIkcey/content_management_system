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
      A.title,   A.summary,     A.content,
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
      A.id        = :id AND
      A.published = 1
    ;"
;

$article = pdo($pdo, $sql, ['id' => $id])->fetch();

if (!$article) {
    include 'page-not-found.php';
}

// print_r($article);
// exit;

?>


<?php include 'includes/header.php' ?>

<div class="container">
    <section class="nav-container">
        <article class="article-content">
            <h1><?= $article['title'] ?></h1>
            <p class="article-meta">By <a target="_blank" href="profile.php"><?= $article['author'] ?></a> |
                <?= date("F j, Y", strtotime($article['created'])) ?>
            </p>
            <img src="<?= 'articles/' . $article['image_file'] ?>" alt="Hidden Beaches of Bali" class="article-hero"
                width="600">
            <p>
                <?= $article['content'] ?>
            </p>
        </article>
    </section>
</div>

<?php include 'includes/footer.php' ?>