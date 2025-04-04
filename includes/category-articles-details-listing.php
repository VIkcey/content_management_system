<?php

$article_id = 0;
if (isset($_GET['id'])) {
  $article_id = $_GET['id'];
}

$sql = "SELECT
      A.id, A.created, A.content , A.title, A.summary,
      A.category_id, A.member_id,
      C.name AS category,
      CONCAT( M.forename, ' ', M.surname ) AS author,
      I.file AS image_file,
      I.alt  AS image_alt
    FROM article AS A
    JOIN      category AS C ON A.category_id = C.id
    JOIN      member   AS M ON A.member_id   = M.id
    LEFT JOIN image    AS I ON A.image_id    = I.id
    WHERE
      A.published = 1 && A.id = $article_id
    ORDER BY A.created DESC;"
;

$article = pdo($pdo, $sql)->fetch();

$title = 'Creative Folk';
$description = 'A collective of creatives for hire';
$section = '';

// $sql = "SELECT id, name FROM category WHERE navigation = 1 && id = $cat_id;";
// $navigation = pdo($pdo, $sql)->fetch();
?>


<div class="category-title">
  <h1>
    Article Details
  </h1>
</div>
<main class="container">
  <article class="article-details">
    <img src="uploads/<?= htmlspecialchars($article['image_file'] ?? 'blank.png') ?>"
      alt="<?= htmlspecialchars($article['image_alt']) ?>" class="article-image">
    <div style="margin: 15px">
      <h2><?= htmlspecialchars($article['title']) ?></h2>
      <p class="meta">
        Posted in <a href="category.php?id=<?= $article['category_id'] ?>">
          <?= htmlspecialchars($article['category']) ?></a>
        by <a href="member.php?id=<?= $article['member_id'] ?>">
          <?= htmlspecialchars($article['author']) ?></a>
        on <?= htmlspecialchars($article['created']) ?>
      </p>
      <div class="article-content">
        <?= nl2br(htmlspecialchars($article['content'])) ?>
      </div>
    </div>
  </article>
</main>