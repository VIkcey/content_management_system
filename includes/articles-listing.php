<?php
$sql = "SELECT
  A.id,   A.title, A.summary,
  C.name AS category,
  CONCAT( M.forename, ' ', M.surname ) AS author,
  I.file AS image_file,
  I.alt  AS image_alt
FROM article AS A
JOIN      category AS C ON A.category_id = C.id
JOIN      member   AS M ON A.member_id   = M.id
LEFT JOIN image    AS I ON A.image_id    = I.id
WHERE
  A.summary LIKE '%design%' AND
  A.published = 1
ORDER BY A.created DESC
LIMIT 6;"
;

$statement = $pdo->query($sql);
$articles = $statement->fetchAll();

// echo "<pre>";
// print_r($articles);
?>


<div class="articles">
    <?php foreach ($articles as $item) { ?>
        <div class="article">
            <img src="https://via.placeholder.com/800x400" alt="<?= $item['image_alt'] ?>">
            <h2><?= $item['title'] ?></h2>
            <p><?= $item['summary'] ?></p>
        </div>
    <?php } ?>
</div>