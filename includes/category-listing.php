<?php


$title = 'Creative Folk';
$description = 'A collective of creatives for hire';
$section = '';

$sql = "SELECT * FROM category WHERE navigation = 1;";
$navigation = pdo($pdo, $sql)->fetchAll();
?>

<main class="container grid" id="content">
  <?php foreach ($navigation as $cat) { ?>
    <a href="category-articles.php?id=<?= $cat['id'] ?>">
      <article class="summary category-cls">
        <?= $cat['name'] ?>
        <p class="credit">
          <?= $cat['description'] ?>
        </p>
      </article>
    </a>
  <?php } ?>
</main>
</body>

</html>