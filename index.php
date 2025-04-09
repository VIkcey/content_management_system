<?php
include 'includes/header.php'
    ?>

<div class="container">
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Discover the World One Adventure at a Time</h2>
            <p>Inspiration, tips, and stories from travelers around the globe 🌍</p>
            <a href="/categories.html" class="btn-primary">Explore Destinations</a>
        </div>
    </section>

    <!-- Latest Posts -->
    <main class="">
        <h2 class="category-title">Latest Adventures</h2>
        <div class="post-grid nav-container">
            <a href="article.html" class="post-card">
                <img src="img/bali.jpg" alt="Bali" class="post-image">
                <div class="post-info">
                    <h3>Hidden Beaches of Bali</h3>
                    <p>April 4, 2025</p>
                </div>
            </a>
            <a href="article.html" class="post-card">
                <img src="img/rome.jpg" alt="Rome" class="post-image">
                <div class="post-info">
                    <h3>A Weekend in Rome</h3>
                    <p>March 29, 2025</p>
                </div>
            </a>
            <a href="article.html" class="post-card">
                <img src="img/peru.jpg" alt="Peru" class="post-image">
                <div class="post-info">
                    <h3>Hiking the Inca Trail</h3>
                    <p>March 22, 2025</p>
                </div>
            </a>
        </div>
    </main>

    <!-- Featured Categories -->
    <section class="">
        <h2 class="category-title">Featured Categories</h2>
        <div class="post-grid nav-container">
            <a href="/category-asia.html" class="post-card">
                <img src="img/asia.jpg" alt="Asia" class="post-image">
                <div class="post-info">
                    <h3>Asia</h3>
                    <p>Temples, street food & ancient wonders</p>
                </div>
            </a>
            <a href="/category-europe.html" class="post-card">
                <img src="img/europe.jpg" alt="Europe" class="post-image">
                <div class="post-info">
                    <h3>Europe</h3>
                    <p>Historic cities & stunning architecture</p>
                </div>
            </a>
            <a href="/category-americas.html" class="post-card">
                <img src="img/americas.jpg" alt="Americas" class="post-image">
                <div class="post-info">
                    <h3>Americas</h3>
                    <p>Mountains, deserts & coastlines</p>
                </div>
            </a>
        </div>
    </section>
</div>

<?php include 'includes/footer.php' ?>