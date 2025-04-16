<?php
declare(strict_types=1);
require_once 'includes/database-connection.php';
require_once 'includes/functions.php';

$sql = "SELECT a.*, c.name as category_name, CONCAT(m.forename, ' ', m.surname) as author_name, i.file as image 
        FROM article a
        LEFT JOIN category c ON a.category_id = c.id 
        LEFT JOIN member m ON a.member_id = m.id 
        LEFT JOIN image i ON a.image_id = i.id
        WHERE a.published = 1 
        ORDER BY a.created DESC";
$articles = $pdo->query($sql)->fetchAll();

$pageTitle = "Blog - My Project";
?>

<?php include_once 'includes/header.php'; ?>

<style>
    .hero {
        background: url('assets/hero-bg.jpg') center/cover no-repeat;
        color: white;
        padding: 80px 20px;
        text-align: center;
    }

    .hero h2 {
        font-size: 3rem;
        margin-bottom: 10px;
    }

    .hero p {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #ff5722;
        color: white;
        padding: 10px 20px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: bold;
        transition: background 0.3s;
    }

    .btn-primary:hover {
        background-color: #e64a19;
    }

    .posts-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        padding: 3rem 1rem;
    }

    .post-card {
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .post-card:hover {
        transform: translateY(-5px);
    }

    .post-image img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .post-content {
        padding: 1.5rem;
    }

    .post-meta {
        font-size: 0.9rem;
        color: #888;
        margin-bottom: 8px;
    }

    .post-title {
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
    }

    .post-title a {
        text-decoration: none;
        color: #333;
    }

    .post-title a:hover {
        color: #ff5722;
    }

    .post-excerpt {
        font-size: 1rem;
        color: #555;
        margin-bottom: 1rem;
    }

    .post-footer {
        display: flex;
        justify-content: space-between;
        font-size: 0.9rem;
        color: #666;
    }

    .read-more {
        text-decoration: none;
        color: #ff5722;
        font-weight: bold;
    }

    .read-more:hover {
        text-decoration: underline;
    }

    .no-posts {
        text-align: center;
        font-size: 1.2rem;
        color: #777;
        padding: 2rem;
    }
</style>

<div class="container">
    <!-- Hero Banner -->
    <section class="hero">
        <div class="hero-content">
            <h2>Welcome to My Project Blog</h2>
            <p>Explore our latest articles and updates</p>
            <a href="categories.php" class="btn-primary">Explore Categories</a>
        </div>
    </section>

    <!-- Blog Grid -->
    <div class="post-grid nav-container">
        <a href="javascript:void(0)" class="post-card">
            <img src="category/67fc4fdd6940c-asia.jpg" alt="Asia" class="post-image">
            <div class="post-info">
                <h3>Asia</h3>
                <p>Temples, street food &amp; ancient wonders</p>
            </div>
        </a>
        <a href="javascript:void(0)" class="post-card">
            <img src="category/67fc501d56b74-americas.jpg" alt="Americas" class="post-image">
            <div class="post-info">
                <h3>Americas</h3>
                <p>Mountains, deserts &amp; coastlines</p>
            </div>
        </a>
        <a href="javascript:void(0)" class="post-card">
            <img src="category/67fc504a39635-australia.jpg" alt="Australia" class="post-image">
            <div class="post-info">
                <h3>Australia</h3>
                <p>Outback adventures &amp; stunning reefs</p>
            </div>
        </a>
        <a href="javascript:void(0)" class="post-card">
            <img src="category/67fc505d19bec-antarctica.jpg" alt="Antarctica" class="post-image">
            <div class="post-info">
                <h3>Antarctica</h3>
                <p>Icebergs, penguins &amp; untouched wilderness</p>
            </div>
        </a>
        <a href="javascript:void(0)" class="post-card">
            <img src="category/67fc50b8e9c68-middle-east.jpg" alt="Middle East" class="post-image">
            <div class="post-info">
                <h3>Middle East</h3>
                <p>Desert landscapes &amp; rich heritage</p>
            </div>
        </a>
        <a href="javascript:void(0)" class="post-card">
            <img src="category/67fc50cfa003b-caribbean.jpg" alt="Caribbean" class="post-image">
            <div class="post-info">
                <h3>Caribbean</h3>
                <p>Island vibes &amp; turquoise waters</p>
            </div>
        </a>
        <a href="javascript:void(0)" class="post-card">
            <img src="category/67fc516eda4b4-pacific.jpeg" alt="Pacific Islands" class="post-image">
            <div class="post-info">
                <h3>Pacific Islands</h3>
                <p>Tropical paradises &amp; coral atolls</p>
            </div>
        </a>
    </div>

</div>

<?php include_once 'includes/footer.php'; ?>