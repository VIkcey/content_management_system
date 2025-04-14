<?php
declare(strict_types=1);
include_once 'includes/database-connection.php';
include_once 'includes/functions.php';
session_start(); // Start the session


$id = $_GET['id'];
if (!$id) {
    include_once 'page-not-found.php';
}

// print_r($id);
// exit;

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
      A.id = :id AND
      A.published = 1
    ;"
;

$article = pdo($pdo, $sql, ['id' => $id])->fetch();

if (!$article) {
    include 'page-not-found.php';
}
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

    <section class="">
        <h2 class="category-title">Articles in Asia</h2>
        <div class="post-grid nav-container">
            <a href="articles-details" class="post-card">
                <img src="img/bali.jpg" alt="Hidden Beaches of Bali" class="post-image">
                <div class="post-info">
                    <h3>Hidden Beaches of Bali</h3>
                    <p>April 4, 2025</p>
                </div>
            </a>
            <a href="articles-details" class="post-card">
                <img src="img/places-to-see-cherry-blossoms-hirano-shrine.jpg" alt="Cherry Blossoms in Kyoto"
                    class="post-image">
                <div class="post-info">
                    <h3>Cherry Blossoms in Kyoto</h3>
                    <p>March 15, 2025</p>
                </div>
            </a>
            <a href="articles-details" class="post-card">
                <img src="img/Thai-street-food.jpg" alt="Street Food in Bangkok" class="post-image">
                <div class="post-info">
                    <h3>Street Food in Bangkok</h3>
                    <p>February 28, 2025</p>
                </div>
            </a>
            <a href="articles-details" class="post-card">
                <img src="img/doris-overview-2048x1349.jpg" alt="Cruising Halong Bay" class="post-image">
                <div class="post-info">
                    <h3>Cruising Halong Bay</h3>
                    <p>February 10, 2025</p>
                </div>
            </a>
            <a href="articles-details" class="post-card">
                <img src="img/Top-10-Trekking-Places-of-Himalayas.jpg" alt="Trekking the Himalayas" class="post-image">
                <div class="post-info">
                    <h3>Trekking the Himalayas</h3>
                    <p>January 25, 2025</p>
                </div>
            </a>
            <a href="articles-details" class="post-card">
                <img src="img/asia-holi.jpeg" alt="Colors of Holi in India" class="post-image">
                <div class="post-info">
                    <h3>Colors of Holi in India</h3>
                    <p>January 5, 2025</p>
                </div>
            </a>
        </div>
    </section>
</div>

<?php include_once 'includes/footer.php' ?>