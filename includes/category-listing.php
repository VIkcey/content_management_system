<?php


$title = 'Creative Folk';
$description = 'A collective of creatives for hire';
$section = '';

$sql = "SELECT * FROM category WHERE navigation = 1;";
$navigation = pdo($pdo, $sql)->fetchAll();
?>

<!-- <main class="container grid" id="content">
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
</main> -->

<main class="category-container">
  <h2 class="category-title">Asia Adventures</h2>
  <div class="post-grid">
    <a href="article.html" class="post-card">
      <img src="images/thailand.jpg" alt="Thailand" class="post-image">
      <div class="post-info">
        <h3>Backpacking Through Thailand</h3>
        <p>March 18, 2025</p>
      </div>
    </a>
    <a href="article.html" class="post-card">
      <img src="images/japan.jpg" alt="Japan" class="post-image">
      <div class="post-info">
        <h3>Cherry Blossoms in Kyoto</h3>
        <p>March 5, 2025</p>
      </div>
    </a>
    <!-- More post cards -->
  </div>
</main>